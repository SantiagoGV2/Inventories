<?php
	require_once "../inc2/session_start.php";

	require_once "main2.php";

    /*== Almacenando id ==*/
    $id=limpiar_cadena($_POST['emple_equi_id']);

    /*== Verificando usuario ==*/
	$check_equi_emple=conexion();
	$check_equi_emple=$check_equi_emple->query("SELECT * FROM emple_equipos WHERE emple_equi_id ='$id'");

    if($check_equi_emple->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El Registro no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_equi_emple->fetch();
    }
    $check_equi_emple=null;

    /*== Almacenando datos del usuario ==*/
    $categoria1 = limpiar_cadena($_POST['emple_cedula']);
    $categoria2=limpiar_cadena($_POST['equi_serial']);

    /*== Verificando campos obligatorios del usuario ==*/
    if($categoria1=="" ||$categoria2=="" ){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }

    /*== Verificando categoria ==*/
    if($categoria!=$datos['emple_cedula']){
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT emple_cedula FROM empleados WHERE emple_cedula='$categoria1'");
	    if($check_categoria->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría CEDULA seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria=null;
    }

    if($categoria!=$datos['equi_serial']){
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT equi_serial FROM emple_equipos WHERE equi_serial='$categoria2'");
	    if($check_categoria->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría SERIAL seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria=null;
    }

    /*== Actualizar datos ==*/
    $actualizar_equi_emple=conexion();
    $actualizar_equi_emple=$actualizar_equi_emple->prepare("UPDATE emple_equipos SET emple_cedula=:categoria1, equi_serial=:categoria2 WHERE emple_equi_id =:id");

    $marcadores=[
        ":categoria1"=>$categoria1,
        ":categoria2"=>$categoria2,
        ":id"=>$id
    ];

    if($actualizar_equi_emple->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡EQUIPO DEL EMPLEADO ACTUALIZADO!</strong><br>
                El usuario se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar el equipo del empleado, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_equi_emple=null;