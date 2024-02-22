<?php
    
    require_once "main.php";

    /*== Almacenando datos ==*/
    $cedula = limpiar_cadena($_POST['emple_cedula']);
    $nombre=limpiar_cadena($_POST['emple_nombre']);
    $primerapellido=limpiar_cadena($_POST['emple_primer_apellido']);

    $segundoapellido=limpiar_cadena($_POST['emple_segundo_apellido']);
    $estado=limpiar_cadena($_POST['emple_estado']);

    $cargo=limpiar_cadena($_POST['emple_cargo']);
    $telefono=limpiar_cadena($_POST['emple_telefono']);
    $categoria=limpiar_cadena($_POST['dot_cod']);


    /*== Verificando campos obligatorios ==*/
    if($cedula=="" ||$nombre=="" || $primerapellido=="" || $segundoapellido==""|| $estado==""||$cargo=="" || $telefono=="" || $categoria== ""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[/^[0-9]+$/]{1,11}",$cedula)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,100}",$nombre)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    

    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,50}",$primerapellido)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El APELLIDO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,50}",$segundoapellido)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,30}",$estado)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,30}",$cargo)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[0-9]+$/]{1,11}",$telefono)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
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


    /*== Verificando usuario ==*/
    if($usuario!=$datos['emple_cedula']){
	    $check_usuario=conexion();
	    $check_usuario=$check_usuario->query("SELECT emple_cedula FROM empleados WHERE emple_cedula='$cedula'");
	    if($check_usuario->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El USUARIO ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_usuario=null;
    }
    $check_usuario=null;
    /*== Verificando categoria ==*/
    if($categoria!=$datos['dot_cod']){
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT dot_cod FROM dotaciones WHERE dot_cod='$categoria'");
	    if($check_categoria->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria=null;
    }


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
    $guardar_usuario=conexion();
    $guardar_usuario=$guardar_usuario->prepare("INSERT INTO empleados(emple_cedula,emple_nombre,emple_primer_apellido,emple_segundo_apellido,emple_estado,emple_cargo,emple_telefono,dot_cod) VALUES(:cedula,:nombre,:primer_apellido,:segundo_apellido,:estado,:cargo,:telefono,:categoria)");

    $marcadores=[
        ":cedula"=>$cedula,
        ":nombre"=>$nombre,
        ":primer_apellido"=>$primerapellido,
        ":segundo_apellido"=>$segundoapellido,
        ":estado"=>$estado,
        ":cargo"=>$cargo,
        ":telefono"=>$telefono,
        ":categoria"=>$categoria
    ];

    $guardar_usuario->execute($marcadores);

    if($guardar_usuario->rowCount()==1){
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
    $guardar_usuario=null;