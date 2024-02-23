<?php
	/*== Almacenando datos ==*/
    $equi_id_del=limpiar_cadena($_GET['equi_id_del']);

    /*== Verificando producto ==*/
    $check_equi_emple=conexion();
    $check_equi_emple=$check_equi_emple->query("SELECT * FROM emple_equipos WHERE emple_equi_id='$equi_id_del'");

    if($check_equi_emple->rowCount()==1){

    	$datos=$check_equi_emple->fetch();

    	$eliminar_equi_emple=conexion();
    	$eliminar_equi_emple=$eliminar_equi_emple->prepare("DELETE FROM emple_equipos WHERE emple_equi_id=:id");

    	$eliminar_equi_emple->execute([":id"=>$equi_id_del]);

    	if($eliminar_equi_emple->rowCount()==1){
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
	    $eliminar_equi_emple=null;
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El registro de la herramienta que intenta eliminar no existe
            </div>
        ';
    }
    $check_equi_emple=null;