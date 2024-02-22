<?php
	/*== Almacenando datos ==*/
    $user_id_del=limpiar_cadena($_GET['user_id_del']);

    /*== Verificando producto ==*/
    $check_usuario=conexion();
    $check_usuario=$check_usuario->query("SELECT * FROM empleados WHERE emple_cedula='$user_id_del'");

    if($check_usuario->rowCount()==1){

    	$datos=$check_usuario->fetch();

    	$eliminar_usuario=conexion();
    	$eliminar_usuario=$eliminar_usuario->prepare("DELETE FROM empleados WHERE emple_cedula=:cedu");

    	$eliminar_usuario->execute([":cedu"=>$user_id_del]);

    	if($eliminar_usuario->rowCount()==1){
	        echo '
	            <div class="notification is-info is-light">
	                <strong>¡PRODUCTO ELIMINADO!</strong><br>
	                Los datos del producto se eliminaron con exito
	            </div>
	        ';
	    }else{
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No se pudo eliminar el producto, por favor intente nuevamente
	            </div>
	        ';
	    }
	    $eliminar_usuario=null;
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El PRODUCTO que intenta eliminar no existe
            </div>
        ';
    }
    $check_usuario=null;