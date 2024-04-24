<?php
	require_once "../inc2/session_start.php";

	require_once "main2.php";

    /*== Almacenando id ==*/
    $id=limpiar_cadena($_POST['emple_her_id']);

    /*== Verificando usuario ==*/
	$check_her_emple=conexion();
	$check_her_emple=$check_her_emple->query("SELECT * FROM emple_herramientas WHERE emple_her_id ='$id'");

    if($check_her_emple->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El Registro no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_her_emple->fetch();
    }
    $check_her_emple=null;

    /*== Almacenando datos del usuario ==*/
    $categoria1 = limpiar_cadena($_POST['emple_cedula']);
    $categoria2=limpiar_cadena($_POST['her_cod']);

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

    if($categoria!=$datos['her_cod']){
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT her_cod FROM herramientas WHERE her_cod='$categoria2'");
	    if($check_categoria->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría CODIGO seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria=null;
    }

    /*== Actualizar datos ==*/
    $actualizar_her_emple=conexion();
    $actualizar_her_emple=$actualizar_her_emple->prepare("UPDATE emple_herramientas SET emple_cedula=:categoria1, her_cod=:categoria2 WHERE emple_her_id =:id");

    $marcadores=[
        ":categoria1"=>$categoria1,
        ":categoria2"=>$categoria2,
        ":id"=>$id
    ];

    if($actualizar_her_emple->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡HERRAMIENTA DEL EMPLEADO ACTUALIZADO!</strong><br>
                La herramienta se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar la herramienta del empleado, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_her_emple=null;