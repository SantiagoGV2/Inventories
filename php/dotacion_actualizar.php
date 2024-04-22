<?php
    require_once "../inc/session_start.php";
	require_once "main.php";

	/*== Almacenando id ==*/
    $codigo=limpiar_cadena($_POST['dot_cod']);


    /*== Verificando producto ==*/
	$check_dotacion=conexion();
	$check_dotacion=$check_dotacion->query("SELECT * FROM dotaciones WHERE dot_cod='$codigo'");

    if($check_dotacion->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La dotacion no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_dotacion->fetch();
    }
    $check_dotacion=null;


    /*== Almacenando datos ==*/
    $cod=limpiar_cadena($_POST['dot_cod']);
	$descripcion=limpiar_cadena($_POST['dot_descripcion']);

	$fecha_entrega=limpiar_cadena($_POST['dot_fecha_entrega']);
	$estado=limpiar_cadena($_POST['dot_estado']);
	$observacion=limpiar_cadena($_POST['dot_observacion']);


	/*== Verificando campos obligatorios ==*/
    if($cod=="" || $descripcion=="" || $fecha_entrega==""|| $estado=="" || $observacion==""){
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
                La DESCRIPCION no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})",$fecha_entrega)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La FECHA no coincide con el formato solicitado
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
    if($codigo!=$datos['dot_cod']){
	    $check_codigo=conexion();
	    $check_codigo=$check_codigo->query("SELECT dot_cod FROM dotaciones WHERE dot_cod='$codigo'");
	    if($check_codigo->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El CODIGO de BARRAS ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_codigo=null;
    }


    /*== Verificando nombre ==
    if($nombre!=$datos['producto_nombre']){
	    $check_nombre=conexion();
	    $check_nombre=$check_nombre->query("SELECT producto_nombre FROM producto WHERE producto_nombre='$nombre'");
	    if($check_nombre->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El NOMBRE ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_nombre=null;
    }
    */


    /*== Verificando categoria ==
    if($categoria!=$datos['categoria_id']){
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT categoria_id FROM categoria WHERE categoria_id='$categoria'");
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
*/

    /*== Actualizando datos ==*/
    $actualizar_dotacion=conexion();
    $actualizar_dotacion=$actualizar_dotacion->prepare("UPDATE dotaciones SET dot_cod=:codigo,dot_descripcion=:descripcion,dot_fecha_entrega=:fecha_entrega,dot_estado=:estado,dot_observacion=:observacion WHERE dot_cod=:codigo");

    $marcadores=[
        ":codigo"=>$cod,
        ":descripcion"=>$descripcion,
        ":fecha_entrega"=>$fecha_entrega,
        ":estado"=>$estado,
        ":observacion"=>$observacion
    ];



    if($actualizar_dotacion->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡DOTACIÓN ACTUALIZADA!</strong><br>
                La dotación se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar la dotación, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_dotacion=null;