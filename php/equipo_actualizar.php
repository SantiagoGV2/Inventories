<?php
    require_once "../inc/session_start.php";
	require_once "main.php";

	/*== Almacenando id ==*/
    $serial=limpiar_cadena($_POST['equi_serial']);


    /*== Verificando producto ==*/
	$check_equipo=conexion();
	$check_equipo=$check_equipo->query("SELECT * FROM equipos WHERE equi_serial='$serial'");

    if($check_equipo->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El equipo no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_equipo->fetch();
    }
    $check_equipo=null;


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
                El CODIGO de BARRAS no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,30}",$numerosalida)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El PRECIO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})",$fecha_entrega)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[/^[\p{L}\s]+$/u]{3,150}",$descripcion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El STOCK no coincide con el formato solicitado
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
    

    /*== Verificando serial ==*/

	    $check_serial=conexion();
	    $check_serial=$check_serial->query("SELECT equi_serial FROM equipos WHERE equi_serial='$serial1'");
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
    $actualizar_equipo=conexion();
    $actualizar_equipo=$actualizar_equipo->prepare("UPDATE equipos SET equi_serial=:serial1,equi_numero_salida=:numero_salida,equi_fecha_entrega=:fecha_entrega,equi_descripcion=:descripcion,equi_estado=:estado WHERE equi_serial=:seri");

    $marcadores=[
        ":serial1"=>$seri,
        ":numero_salida"=>$numerosalida,
        ":fecha_entrega"=>$fecha_entrega,
        ":descripcion"=>$descripcion,
        ":estado"=>$estado

    ];



    if($actualizar_equipo->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡EQUIPO ACTUALIZADO!</strong><br>
                El producto se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar el equipo, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_equipo=null;