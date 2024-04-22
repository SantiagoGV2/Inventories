<?php
$modulo_buscador = limpiar_cadena($_POST['modulo_buscador']);

$modulos = ["usuarios", "equipos", "empleados", "herramientas", "dotaciones", "epps"];

if (in_array($modulo_buscador, $modulos)) {

    $modulos_url = [
        "usuarios"=>"user_search",
        "equipos"=>"equi_search",
        "empleados"=>"emple_search",
        "herramientas"=>"product_search",
        "dotaciones"=>"dot_search",
        "epps"=>"epp_search"
    ];

    $modulos_url = $modulos_url[$modulo_buscador];

    $modulo_buscador = "busqueda_".$modulo_buscador;


  
    # Iniciar busqueda 
		if(isset($_POST['txt_buscador'])){

			$txt=limpiar_cadena($_POST['txt_buscador']);

			if($txt==""){
				echo '
		            <div class="notification is-danger is-light">
		                <strong>¡Ocurrio un error inesperado!</strong><br>
		                Introduce el termino de busqueda
		            </div>
		        ';
			}else{
				if(verificar_datos("[/^[\p{L}\s]+$/u]{1,30}", $txt)){
			        echo '
			            <div class="notification is-danger is-light">
			                <strong>¡Ocurrio un error inesperado!</strong><br>
			                El termino de busqueda no coincide con el formato solicitado
			            </div>
			        ';
			    }else{
			    	$_SESSION[$modulo_buscador]=$txt;
			    	header("Location: index.php?vista=$modulos_url"); 
 					exit();  
			    }
			}
		}

    // Eliminar búsqueda
    if (isset($_POST['eliminar_buscador'])) {
        unset($_SESSION[$modulo_buscador]);
        header("Location: index.php?vista=$modulos_url");
        exit();
    }else {
    echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No podemos procesar la petición
            </div>
        ';
    }
}
