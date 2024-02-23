<div class="container is-fluid mb-6">
    <h1 class="title">Productos</h1>
    <h2 class="subtitle">Lista de productos</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        # Eliminar producto #
        if(isset($_GET['her_id_del'])){
            require_once "./php/equi_emple_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }

        $categoria_id1 = (isset($_GET['emple_cedula'])) ? $_GET['emple_cedula'] : 0;
        $categoria_id2 = (isset($_GET['equi_serial'])) ? $_GET['equi_serial'] : 0;

        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=equi_emple_list&page="; /* <== */
        $registros=15;
        $busqueda="";

        # Paginador producto #
        require_once "./php/equi_emple_lista.php";
    ?>
</div>