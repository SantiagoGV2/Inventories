<div class="container is-fluid mb-6">
    <h1 class="title">EPPS Empleados</h1>
    <h2 class="subtitle">Lista EPPS empleados</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php2/main2.php";

        # Eliminar producto #
        if(isset($_GET['epp_id_del'])){
            require_once "./php2/epp_emple_eliminar.php";
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
        $categoria_id2 = (isset($_GET['epp_descripcion'])) ? $_GET['epp_descripcion'] : 0;

        $pagina=limpiar_cadena($pagina);
        $url="index2.php?vista=epp_emple_list&page="; /* <== */
        $registros=15;
        $busqueda="";

        # Paginador producto #
        require_once "./php2/epp_emple_lista.php";
    ?>
</div>