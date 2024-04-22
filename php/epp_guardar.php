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



    /*== Verificando nombre ==
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
    */

    /*== Verificando categoria ==
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

*/
    /* Directorios de imagenes 
	$img_dir='../img/producto/';

    */
	/*== Comprobando si se ha seleccionado una imagen ==
	if($_FILES['producto_foto']['name']!="" && $_FILES['producto_foto']['size']>0){

        /* Creando directorio de imagenes 
        if(!file_exists($img_dir)){
            if(!mkdir($img_dir,0777)){
                echo '
                    <div class="notification is-danger is-light">
                        <strong>¡Ocurrio un error inesperado!</strong><br>
                        Error al crear el directorio de imagenes
                    </div>
                ';
                exit();
            }
        }

		/* Comprobando formato de las imagenes 
		if(mime_content_type($_FILES['producto_foto']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['producto_foto']['tmp_name'])!="image/png"){
			echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La imagen que ha seleccionado es de un formato que no está permitido
	            </div>
	        ';
	        exit();
		}


		/* Comprobando que la imagen no supere el peso permitido 
		if(($_FILES['producto_foto']['size']/1024)>3072){
			echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La imagen que ha seleccionado supera el límite de peso permitido
	            </div>
	        ';
			exit();
		}


		/* extencion de las imagenes 
		switch(mime_content_type($_FILES['producto_foto']['tmp_name'])){
			case 'image/jpeg':
			  $img_ext=".jpg";
			break;
			case 'image/png':
			  $img_ext=".png";
			break;
		}

		/* Cambiando permisos al directorio 
		chmod($img_dir, 0777);

		/* Nombre de la imagen 
		$img_nombre=renombrar_fotos($nombre);

		/* Nombre final de la imagen 
		$foto=$img_nombre.$img_ext;

		/* Moviendo imagen al directorio 
		if(!move_uploaded_file($_FILES['producto_foto']['tmp_name'], $img_dir.$foto)){
			echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No podemos subir la imagen al sistema en este momento, por favor intente nuevamente
	            </div>
	        ';
			exit();
		}

	}else{
		$foto="";
	}
*/

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
   
