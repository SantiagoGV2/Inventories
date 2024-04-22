<div class="container is-fluid mb-6">
	<h1 class="title">EPPS</h1>
	<h2 class="subtitle">Buscar EPPS</h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        require_once "./php/main.php";

        if(isset($_POST['modulo_buscador'])){
            require_once "./php/buscador.php";
        }

        if(!isset($_SESSION['busqueda_epps']) && empty($_SESSION['busqueda_epps'])){
    ?>
    <div class="columns">
        <div class="column">
            <form action="" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="epps">
                <div class="field is-grouped">
                    <p class="control is-expanded">
                        <input class="input is-rounded" type="text" name="txt_buscador" placeholder="¿Qué estas buscando?" pattern="[/^[\p{L}\s]+$/u]{1,30}" maxlength="30" >
                    </p>
                    <p class="control">
                        <button class="button is-info" type="submit">Buscar</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <?php }else{ ?>
    <div class="columns">
        <div class="column">
            <form class="has-text-centered mt-6 mb-6" action="" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="epps"> 
                <input type="hidden" name="eliminar_buscador" value="epps">
                <p>Estas buscando <strong>“<?php echo $_SESSION['busqueda_epps']; ?>”</strong></p>
                <br>
                <button type="submit" class="button is-danger is-rounded">Eliminar busqueda</button>
            </form>
        </div>
    </div>
    <?php
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
            $url="index.php?vista=epp_search&page="; /* <== */
            $registros=15;
            $busqueda=$_SESSION['busqueda_epps']; /* <== */

            # Paginador producto #
            require_once "./php/epp_lista.php";
        } 
    ?>
</div>