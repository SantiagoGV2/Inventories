<?php
	require_once "../inc2/session_start.php";

	require_once "main2.php";

    /*== Almacenando id ==*/
    $id=limpiar_cadena($_POST['emple_epp_id']);

    /*== Verificando usuario ==*/
	$check_epp_emple=conexion();
	$check_epp_emple=$check_her_emple->query("SELECT * FROM emple_epps WHERE emple_epp_id ='$id'");

    if($check_her_emple->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El Registro no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_epp_emple->fetch();
    }
    $check_epp_emple=null;

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

    if($categoria!=$datos['epp_cod']){
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT epp_cod FROM epps WHERE epp_cod='$categoria2'");
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
    $actualizar_epp_emple=conexion();
    $actualizar_epp_emple=$actualizar_epp_emple->prepare("UPDATE emple_epps SET emple_cedula=:categoria1, epp_cod=:categoria2 WHERE emple_epp_id =:id");

    $marcadores=[
        ":categoria1"=>$categoria1,
        ":categoria2"=>$categoria2,
        ":id"=>$id
    ];

    if($actualizar_epp_emple->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡EPP EMPLEADO ACTUALIZADO!</strong><br>
                El epp del empleado se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar el epp del empleado, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_epp_emple=null;