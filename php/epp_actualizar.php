<?php
    require_once "../inc/session_start.php";
	require_once "main.php";

	/*== Almacenando id ==*/
    $codigo=limpiar_cadena($_POST['epp_cod']);


    /*== Verificando producto ==*/
	$check_epp=conexion();
	$check_epp=$check_epp->query("SELECT * FROM epps WHERE epp_cod='$codigo'");

    if($check_epp->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El epp no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_epp->fetch();
    }
    $check_epp=null;


    /*== Almacenando datos ==*/
    $cod=limpiar_cadena($_POST['epp_cod']);

	$descripcion=limpiar_cadena($_POST['epp_descripcion']);
    $disponibilidad=limpiar_cadena($_POST['epp_disponibilidad']);
	$estado=limpiar_cadena($_POST['epp_estado']);
    $fecha_entrega=limpiar_cadena($_POST['epp_fecha_entrega']);


	/*== Verificando campos obligatorios ==*/
    if($cod=="" || $descripcion=="" || $disponibilidad=="" ||$estado==""|| $fecha_entrega==""){
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
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,100}",$disponibilidad)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA DISPONIBILIDAD no coincide con el formato solicitado
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
    if(verificar_datos("[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})]",$fecha_entrega)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA FECHA DE ENTREGA no coincide con el formato solicitado
            </div>
        ';
        exit();
    }



    /*== Verificando codigo ==*/
    if($codigo!=$datos['epp_cod']){
	    $check_codigo=conexion();
	    $check_codigo=$check_codigo->query("SELECT epp_cod FROM epps WHERE epp_cod='$codigo'");
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
    $actualizar_epp=conexion();
    $actualizar_epp=$actualizar_epp->prepare("UPDATE epps SET epp_cod=:codigo,epp_descripcion=:descripcion,epp_disponibilidad=:disponibilidad,epp_estado=:estado,epp_fecha_entrega=:fecha_entrega WHERE epp_cod=:codigo");

    $marcadores=[
        ":codigo"=>$cod,
        ":descripcion"=>$descripcion,
        ":disponibilidad"=>$disponibilidad,
        ":estado"=>$estado,
        ":fecha_entrega"=>$fecha_entrega

    ];



    if($actualizar_epp->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡EPP ACTUALIZADO!</strong><br>
                El producto se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar el epp, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_epp=null;