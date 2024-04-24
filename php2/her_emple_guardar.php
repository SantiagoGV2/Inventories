<?php
    
    require_once "main2.php";

    /*== Almacenando datos ==*/
    $categoria1 = limpiar_cadena($_POST['emple_cedula']);
    $categoria2=limpiar_cadena($_POST['her_cod']);



    /*== Verificando campos obligatorios ==*/
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
 
	    $check_categoria1=conexion();
	    $check_categoria1=$check_categoria1->query("SELECT emple_cedula FROM empleados WHERE emple_cedula='$categoria1'");
	    if($check_categoria1->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría CEDULA seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria1=null;
    


	    $check_categoria2=conexion();
	    $check_categoria2=$check_categoria2->query("SELECT her_cod FROM herramientas WHERE her_cod='$categoria2'");
	    if($check_categoria2->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría CODIGO seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria2=null;
    


    /*== Guardando datos ==*/
    $guardar_her_emple=conexion();
    $guardar_her_emple=$guardar_her_emple->prepare("INSERT INTO emple_herramientas(emple_cedula,her_cod) VALUES(:categoria1,:categoria2)");

    $marcadores=[
        ":categoria1"=>$categoria1,
        ":categoria2"=>$categoria2  


    ];

    $guardar_her_emple->execute($marcadores);

    if($guardar_her_emple->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡HERRAMIENTA DEL EMPLEADO REGISTRADO!</strong><br>
                El usuario se registro con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar la herramienta del empleado, por favor intente nuevamente
            </div>
        ';
    }
    $guardar_her_emple=null;