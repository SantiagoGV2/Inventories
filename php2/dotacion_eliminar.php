<?php
	/*== Almacenando datos ==*/
    $dotacion_id_del=limpiar_cadena($_GET['dotacion_id_del']);

    /*== Verificando producto ==*/
    $check_dotacion=conexion();
    $check_dotacion=$check_dotacion->query("SELECT * FROM dotaciones WHERE dot_cod='$dotacion_id_del'");

    if($check_dotacion->rowCount()==1){

    	$datos=$check_dotacion->fetch();

    	$eliminar_dotacion=conexion();
    	$eliminar_dotacion=$eliminar_dotacion->prepare("DELETE FROM dotaciones WHERE dot_cod=:cod");

    	$eliminar_dotacion->execute([":cod"=>$dotacion_id_del]);

    	if($eliminar_dotacion->rowCount()==1){
	        echo '
	            <div class="notification is-info is-light">
	                <strong>¡DOTACION ELIMINADA!</strong><br>
	                Los datos de la dotación se eliminaron con exito
	            </div>
	        ';
	    }else{
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No se pudo eliminar la dotación, por favor intente nuevamente
	            </div>
	        ';
	    }
	    $eliminar_dotacion=null;
    }else{
        echo '
            <div class="notification is-dan8ger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La dotación que intenta eliminar no existe
            </div>
        ';
    }
    $check_dotacion=null;