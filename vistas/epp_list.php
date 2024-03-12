<div class="container is-fluid mb-6">
    <h1 class="title">EPPS</h1>
    <h2 class="subtitle">Lista de EPPS</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        # Eliminar producto #
        if(isset($_GET['epp_id_del'])){
            require_once "./php/epp_eliminar.php";
        }

        if(!isset($_GET['page'])){
            $pagina=1;
        }else{
            $pagina=(int) $_GET['page'];
            if($pagina<=1){
                $pagina=1;
            }
        }
        $pagina=limpiar_cadena($pagina);
        $url="index.php?vista=epp_list&page="; /* <== */
        $registros=15;
        $busqueda="";

        # Paginador producto #
        require_once "./php/epp_lista.php";
    ?>
</div>