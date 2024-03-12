<?php
	/*== Almacenando datos ==*/
    $epp_id_del=limpiar_cadena($_GET['epp_id_del']);

    /*== Verificando producto ==*/
    $check_epp_emple=conexion();
    $check_epp_emple=$check_epp_emple->query("SELECT * FROM emple_epps WHERE emple_epp_id='$epp_id_del'");

    if($check_epp_emple->rowCount()==1){

    	$datos=$check_epp_emple->fetch();

    	$eliminar_epp_emple=conexion();
    	$eliminar_epp_emple=$eliminar_epp_emple->prepare("DELETE FROM emple_epps WHERE emple_epp_id=:id");

    	$eliminar_epp_emple->execute([":id"=>$epp_id_del]);

    	if($eliminar_epp_emple->rowCount()==1){
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
	    $eliminar_epp_emple=null;
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El registro de la herramienta que intenta eliminar no existe
            </div>
        ';
    }
    $check_epp_emple=null;