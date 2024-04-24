<?php

	require_once "main2.php";

	/*== Almacenando datos ==*/
	$cod=limpiar_cadena($_POST['her_cod']);
	

	$descripcion=limpiar_cadena($_POST['her_descripcion']);
	$estado=limpiar_cadena($_POST['her_estado']);
	$fecha_entrada=limpiar_cadena($_POST['her_fecha_entrada']);
    $fecha_entrega=limpiar_cadena($_POST['her_fecha_entrega']);

	/*== Verificando campos obligatorios ==*/
    if($cod=="" || $descripcion=="" || $estado=="" || $fecha_entrada=="" || $fecha_entrega==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[/^[\p{L}\s]+$/u]{1,15}",$cod)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CODIGO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    
    
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,100}",$descripcion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA DESCRIPCION no coincide con el formato solicitado
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
    if(verificar_datos("[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})",$fecha_entrada)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA FECHA DE ENTRADA no coincide con el formato solicitado
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

    /*== Verificando codigo ==*/
    $check_codigo=conexion();
    $check_codigo=$check_codigo->query("SELECT her_cod FROM herramientas WHERE her_cod='$cod'");
    if($check_codigo->rowCount()>0){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CODIGO ingresado ya se encuentra registrado, por favor elija otro
            </div>
        ';
        exit();
    }
    $check_codigo=null;


	/*== Guardando datos ==*/
    $guardar_producto=conexion();
    $guardar_producto=$guardar_producto->prepare("INSERT INTO herramientas(her_cod,her_descripcion,her_estado,her_fecha_entrada,her_fecha_entrega) VALUES(:codigo,:descripcion,:estado,:fecha_entrada,:fecha_entrega)");

    $marcadores=[
        ":codigo"=>$cod,
        ":descripcion"=>$descripcion,
        ":estado"=>$estado,
        ":fecha_entrada"=>$fecha_entrada,
        ":fecha_entrega"=>$fecha_entrega
    ];

    $guardar_producto->execute($marcadores);

    if($guardar_producto->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡HERRAMIENTA REGISTRADA!</strong><br>
                El producto se registro con exito
            </div>
        ';
    }else{
        echo '
        <div class="notification is-info is-light">
            <strong>¡EROR NO SE RISTRO LA HERRAMIENTA!</strong><br>
        </div>
    ';
    }
    $guardar_producto=null;
   
