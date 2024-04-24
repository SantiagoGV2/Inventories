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
    $categoria1=limpiar_cadena($_POST['dot_cod']);
    $categoria2=limpiar_cadena($_POST['usu_id']);



    /*== Verificando campos obligatorios ==*/
    if($cedula=="" ||$nombre=="" || $primerapellido=="" || $segundoapellido==""|| $estado==""||$cargo=="" || $telefono=="" || $categoria1== ""|| $categoria2==""){
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
                LA CEDULA no coincide con el formato solicitado
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
                El PRIMER APELLIDO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,50}",$segundoapellido)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El SEGUNDO APELLIDO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,30}",$estado)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El ESTADO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,30}",$cargo)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CARGO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,11}",$telefono)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El TELEFONO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }



    /*== Verificando usuario ==*/

	    $check_empleado=conexion();
	    $check_empleado=$check_empleado->query("SELECT emple_cedula FROM empleados WHERE emple_cedula='$cedula'");
	    if($check_empleado->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El EMPLEADO ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_empleado=null;
    /*== Verificando categoria ==*/
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT dot_cod FROM dotaciones WHERE dot_cod='$categoria1'");
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

        /*== Verificando categoria ==*/
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT usu_id FROM usuarios WHERE usu_id='$categoria2'");
	    if($check_categoria->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría USUARIO seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria=null;



    


    /*== Guardando datos ==*/
    $guardar_empleado=conexion();
    $guardar_empleado=$guardar_empleado->prepare("INSERT INTO empleados(emple_cedula,emple_nombre,emple_primer_apellido,emple_segundo_apellido,emple_estado,emple_cargo,emple_telefono,dot_cod,usu_id) VALUES(:cedula,:nombre,:primer_apellido,:segundo_apellido,:estado,:cargo,:telefono,:categoria1,:categoria2)");

    $marcadores=[
        ":cedula"=>$cedula,
        ":nombre"=>$nombre,
        ":primer_apellido"=>$primerapellido,
        ":segundo_apellido"=>$segundoapellido,
        ":estado"=>$estado,
        ":cargo"=>$cargo,
        ":telefono"=>$telefono,
        ":categoria1"=>$categoria1,
        ":categoria2"=>$categoria2
    ];

    $guardar_empleado->execute($marcadores);

    if($guardar_empleado->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡EMPLEADO REGISTRADO!</strong><br>
                El usuario se registro con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar el empleado, por favor intente nuevamente
            </div>
        ';
    }
    $guardar_empleado=null;