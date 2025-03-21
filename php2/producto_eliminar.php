<?php
	/*== Almacenando datos ==*/
    $product_id_del=limpiar_cadena($_GET['product_id_del']);

    /*== Verificando producto ==*/
    $check_producto=conexion();
    $check_producto=$check_producto->query("SELECT * FROM herramientas WHERE her_cod='$product_id_del'");

    if($check_producto->rowCount()==1){

    	$datos=$check_producto->fetch();

    	$eliminar_producto=conexion();
    	$eliminar_producto=$eliminar_producto->prepare("DELETE FROM herramientas WHERE her_cod=:cod");

    	$eliminar_producto->execute([":cod"=>$product_id_del]);

    	if($eliminar_producto->rowCount()==1){
	        echo '
	            <div class="notification is-info is-light">
	                <strong>¡HERRAMIENTA ELIMINADA!</strong><br>
	                Los datos del producto se eliminaron con exito
	            </div>
	        ';
	    }else{
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No se pudo eliminar la herramienta, por favor intente nuevamente
	            </div>
	        ';
	    }
	    $eliminar_producto=null;
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La herramienta que intenta eliminar no existe
            </div>
        ';
    }
    $check_producto=null;