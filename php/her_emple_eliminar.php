<?php
	/*== Almacenando datos ==*/
    $her_id_del=limpiar_cadena($_GET['her_id_del']);

    /*== Verificando producto ==*/
    $check_her_emple=conexion();
    $check_her_emple=$check_her_emple->query("SELECT * FROM emple_herramientas WHERE emple_her_id='$her_id_del'");

    if($check_her_emple->rowCount()==1){

    	$datos=$check_her_emple->fetch();

    	$eliminar_her_emple=conexion();
    	$eliminar_her_emple=$eliminar_her_emple->prepare("DELETE FROM emple_herramientas WHERE emple_her_id=:id");

    	$eliminar_her_emple->execute([":id"=>$her_id_del]);

    	if($eliminar_her_emple->rowCount()==1){
	        echo '
	            <div class="notification is-info is-light">
	                <strong>¡HERRAMIENTA ASIGNADA ELIMINADA!</strong><br>
	                Los datos de la herramienta se eliminaron con exito
	            </div>
	        ';
	    }else{
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No se pudo eliminar la herramienta asignada, por favor intente nuevamente
	            </div>
	        ';
	    }
	    $eliminar_her_emple=null;
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El registro de la herramienta asignada que intenta eliminar no existe
            </div>
        ';
    }
    $check_her_emple=null;