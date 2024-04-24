<?php

	require_once "main.php";

	/*== Almacenando datos ==*/
	$cod=limpiar_cadena($_POST['dot_cod']);

	$descripcion=limpiar_cadena($_POST['dot_descripcion']);
    $fecha_entrega=limpiar_cadena($_POST['dot_fecha_entrega']);
	$estado=limpiar_cadena($_POST['dot_estado']);
	$observacion=limpiar_cadena($_POST['dot_observacion']);
    

	/*== Verificando campos obligatorios ==*/
    if($cod=="" || $descripcion=="" || $fecha_entrega=="" || $estado=="" || $observacion==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
    if(verificar_datos("[/^[\p{L}\s]+$/u]{1,50}",$cod)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CODIGO de BARRAS no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,100}",$descripcion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA DESCRIPCION de BARRAS no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    
    if(verificar_datos("[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})",$fecha_entrega)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El FECHA DE ENTREGA no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,50}",$estado)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El ESTADO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,150}",$observacion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA OBSERVACION no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    /*== Verificando codigo ==*/
    $check_codigo=conexion();
    $check_codigo=$check_codigo->query("SELECT dot_cod FROM dotaciones WHERE dot_cod='$cod'");
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
    $guardar_producto=$guardar_producto->prepare("INSERT INTO dotaciones(dot_cod,dot_descripcion,dot_fecha_entrega,dot_estado,dot_observacion) VALUES(:codigo,:descripcion,:fecha_entrega,:estado,:observacion)");

    $marcadores=[
        ":codigo"=>$cod,
        ":descripcion"=>$descripcion,
        ":fecha_entrega"=>$fecha_entrega,
        ":estado"=>$estado,
        ":observacion"=>$observacion
    ];

    $guardar_producto->execute($marcadores);

    if($guardar_producto->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡DOTACIóN REGISTRADA!</strong><br>
                La dotación se registro con exito
            </div>
        ';
    }else{
        echo '
        <div class="notification is-info is-light">
            <strong>¡EROR NO SE REGISTRO LA DOTACIÓN!</strong><br>
        </div>
    ';
    }
    $guardar_producto=null;
   
