<div class="container is-fluid mb-6">
    <h1 class="title">Empleados</h1>
    <h2 class="subtitle">Lista de empleados</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php2/main2.php";

        # Eliminar producto #
        if(isset($_GET['emple_id_del'])){
            require_once "./php2/empleado_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $categoria_id = (isset($_GET['dot_descripcion'])) ? $_GET['dot_descripcion'] : 0;

        $pagina=limpiar_cadena($pagina);
        $url="index2.php?vista=emple_list&page="; /* <== */
        $registros=15;
        $busqueda="";

        # Paginador producto #
        require_once "./php2/empleado_lista.php";
    ?>
</div>