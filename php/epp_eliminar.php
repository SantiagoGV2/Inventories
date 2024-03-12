<?php
	/*== Almacenando datos ==*/
    $epp_id_del=limpiar_cadena($_GET['epp_id_del']);

    /*== Verificando producto ==*/
    $check_epp=conexion();
    $check_epp=$check_epp->query("SELECT * FROM epps WHERE epp_cod='$epp_id_del'");

    if($check_epp->rowCount()==1){

    	$datos=$check_epp->fetch();

    	$eliminar_epp=conexion();
    	$eliminar_epp=$eliminar_epp->prepare("DELETE FROM epps WHERE epp_cod=:cod");

    	$eliminar_epp->execute([":cod"=>$epp_id_del]);

    	if($eliminar_epp->rowCount()==1){
	        echo '
	            <div class="notification is-info is-light">
	                <strong>¡HERRAMIENTA ASIGNADA ELIMINADA!</strong><br>
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
	    $eliminar_epp=null;
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El registro de la herramienta que intenta eliminar no existe
            </div>
        ';
    }
    $check_epp=null;