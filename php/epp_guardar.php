<?php

	require_once "main.php";

	$cod=limpiar_cadena($_POST['epp_cod']);

	$descripcion=limpiar_cadena($_POST['epp_descripcion']);
    $disponibilidad=limpiar_cadena($_POST['epp_disponibilidad']);
	$estado=limpiar_cadena($_POST['epp_estado']);
    $fecha_entrega=limpiar_cadena($_POST['epp_fecha_entrega']);
    
/*== Verificando campos obligatorios ==*/
if($cod=="" || $descripcion=="" || $disponibilidad==""|| $estado=="" || $fecha_entrega==""){
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

    /*== Verificando serial ==*/

	    $check_codigo=conexion();
	    $check_codigo=$check_codigo->query("SELECT epp_cod FROM epps WHERE epp_cod='$cod'");
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
    $guardar_epp=conexion();
    $guardar_epp=$guardar_epp->prepare("INSERT INTO epps(epp_cod,epp_descripcion,epp_disponibilidad,epp_estado,epp_fecha_entrega) VALUES(:codigo,:descripcion,:disponibilidad,:estado,:fecha_entrega)");

    $marcadores=[
        ":codigo"=>$cod,
        ":descripcion"=>$descripcion,
        ":disponibilidad"=>$disponibilidad,
        ":estado"=>$estado,
        ":fecha_entrega"=>$fecha_entrega
    ];

    $guardar_epp->execute($marcadores);

    if($guardar_epp->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡EPP REGISTRADO!</strong><br>
                El epp se registro con exito
            </div>
        ';
    }else{
        echo '
        <div class="notification is-info is-light">
            <strong>¡EROR NO SE REGISTRO!</strong><br>
        </div>
    ';
    }
    $guardar_epp=null;
   
