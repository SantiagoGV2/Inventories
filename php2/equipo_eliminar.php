<?php
	/*== Almacenando datos ==*/
    $equi_id_del=limpiar_cadena($_GET['equi_id_del']);

    /*== Verificando producto ==*/
    $check_equipo=conexion();
    $check_equipo=$check_equipo->query("SELECT * FROM equipos WHERE equi_serial='$equi_id_del'");

    if($check_equipo->rowCount()==1){

    	$datos=$check_equipo->fetch();

    	$eliminar_equipo=conexion();
    	$eliminar_equipo=$eliminar_equipo->prepare("DELETE FROM equipos WHERE equi_serial=:seri");

    	$eliminar_equipo->execute([":seri"=>$equi_id_del]);

    	if($eliminar_equipo->rowCount()==1){
	        echo '
	            <div class="notification is-info is-light">
	                <strong>¡EQUIPO ELIMINADO!</strong><br>
	                Los datos del producto se eliminaron con exito
	            </div>
	        ';
	    }else{
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No se pudo eliminar el equipo, por favor intente nuevamente
	            </div>
	        ';
	    }
	    $eliminar_equipo=null;
    }else{
        echo '
            <div class="notification is-dan8ger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El equipo que intenta eliminar no existe
            </div>
        ';
    }
    $check_equipo=null;