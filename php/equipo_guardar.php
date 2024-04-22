<?php

	require_once "main.php";

	/*== Almacenando datos ==*/
	$seri=limpiar_cadena($_POST['equi_serial']);
	$numerosalida=limpiar_cadena($_POST['equi_numero_salida']);
	$fecha_entrega=limpiar_cadena($_POST['equi_fecha_entrega']);
	$descripcion=limpiar_cadena($_POST['equi_descripcion']);
    $estado=limpiar_cadena($_POST['equi_estado']);
    

	/*== Verificando campos obligatorios ==*/
    if($seri=="" || $numerosalida=="" || $fecha_entrega==""|| $descripcion=="" || $estado==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[/^[\p{L}\s]+$/u]{1,50}",$seri)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El SERIAL no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,30}",$numerosalida)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NUMERO DE SALIDA no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})",$fecha_entrega)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA FECHA DE ENTREGA no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,150}",$descripcion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA DESCRIPCION no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,50}",$estado)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA ESTADO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    /*== Verificando serial ==*/

	    $check_serial=conexion();
	    $check_serial=$check_serial->query("SELECT equi_serial FROM equipos WHERE equi_serial='$seri'");
	    if($check_serial->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El SERIAL ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_serial=null;

	/*== Guardando datos ==*/
    $guardar_equipo=conexion();
    $guardar_equipo=$guardar_equipo->prepare("INSERT INTO equipos(equi_serial,equi_numero_salida,equi_fecha_entrega,equi_descripcion,equi_estado) VALUES(:serial1,:numero_salida,:fecha_entrega,:descripcion,:estado)");

    $marcadores=[
        ":serial1"=>$seri,
        ":numero_salida"=>$numerosalida,
        ":fecha_entrega"=>$fecha_entrega,
        ":descripcion"=>$descripcion,
        ":estado"=>$estado
    ];

    $guardar_equipo->execute($marcadores);

    if($guardar_equipo->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡EQUIPO REGISTRADO!</strong><br>
                El equipo se registro con exito
            </div>
        ';
    }else{
        echo '
        <div class="notification is-info is-light">
            <strong>¡EROR NO SE RISTRO!</strong><br>
        </div>
    ';
    }
    $guardar_equipo=null;
   
