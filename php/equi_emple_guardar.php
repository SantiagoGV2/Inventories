<?php
    
    require_once "main.php";

    /*== Almacenando datos ==*/
    $categoria1 = limpiar_cadena($_POST['emple_cedula']);
    $categoria2=limpiar_cadena($_POST['equi_serial']);



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

    /*== Verificando email ==
    if($email!=""){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $check_email=conexion();
            $check_email=$check_email->query("SELECT usuario_email FROM usuario WHERE usuario_email='$email'");
            if($check_email->rowCount()>0){
                echo '
                    <div class="notification is-danger is-light">
                        <strong>¡Ocurrio un error inesperado!</strong><br>
                        El correo electrónico ingresado ya se encuentra registrado, por favor elija otro
                    </div>
                ';
                exit();
            }
            $check_email=null;
        }else{
            echo '
                <div class="notification is-danger is-light">
                    <strong>¡Ocurrio un error inesperado!</strong><br>
                    Ha ingresado un correo electrónico no valido
                </div>
            ';
            exit();
        } 
    }


    /*== Verificando categoria ==*/
 
	    $check_categoria1=conexion();
	    $check_categoria1=$check_categoria1->query("SELECT emple_cedula FROM empleados WHERE emple_cedula='$categoria1'");
	    if($check_categoria1->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria1=null;
    


	    $check_categoria2=conexion();
	    $check_categoria2=$check_categoria2->query("SELECT equi_serial FROM equipos WHERE equi_serial='$categoria2'");
	    if($check_categoria2->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria2=null;
    


    /*== Verificando claves ==
    if($clave_1!=$clave_2){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                Las CLAVES que ha ingresado no coinciden
            </div>
        ';
        exit();
    }else{
        $clave=password_hash($clave_1,PASSWORD_BCRYPT,["cost"=>10]);
    }


    /*== Guardando datos ==*/
    $guardar_equi_emple=conexion();
    $guardar_equi_emple=$guardar_equi_emple->prepare("INSERT INTO emple_equipos(emple_cedula,equi_serial) VALUES(:categoria1,:categoria2)");

    $marcadores=[
        ":categoria1"=>$categoria1,
        ":categoria2"=>$categoria2  


    ];

    $guardar_equi_emple->execute($marcadores);

    if($guardar_equi_emple->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡TECNICO REGISTRADO!</strong><br>
                El usuario se registro con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar el tecnico, por favor intente nuevamente
            </div>
        ';
    }
    $guardar_equi_emple=null;