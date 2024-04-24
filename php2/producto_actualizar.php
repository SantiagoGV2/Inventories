<?php
    require_once "../inc2/session_start.php";
	require_once "main2.php";

	/*== Almacenando id ==*/
    $codigo=limpiar_cadena($_POST['her_cod']);


    /*== Verificando producto ==*/
	$check_producto=conexion();
	$check_producto=$check_producto->query("SELECT * FROM herramientas WHERE her_cod='$codigo'");

    if($check_producto->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El herramienta no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_producto->fetch();
    }
    $check_producto=null;


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
                El CODIGO de BARRAS no coincide con el formato solicitado
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
                LA FECHA ENTRADA no coincide con el formato solicitado
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
    if($codigo!=$datos['her_cod']){
	    $check_codigo=conexion();
	    $check_codigo=$check_codigo->query("SELECT her_cod FROM herramientas WHERE her_cod='$codigo'");
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
    }



    /*== Actualizando datos ==*/
    $actualizar_producto=conexion();
    $actualizar_producto=$actualizar_producto->prepare("UPDATE herramientas SET her_cod=:codigo,her_descripcion=:descripcion,her_estado=:estado,her_fecha_entrada=:fecha_entrada, her_fecha_entrega=:fecha_entrega WHERE her_cod=:codigo");

    $marcadores=[
        ":codigo"=>$cod,
        ":descripcion"=>$descripcion,
        ":estado"=>$estado,
        ":fecha_entrada"=>$fecha_entrada,
        ":fecha_entrega"=>$fecha_entrega
    ];



    if($actualizar_producto->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡HERRAMIENTA ACTUALIZADA!</strong><br>
                El producto se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar la herramienta, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_producto=null;