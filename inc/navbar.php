<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a href="index2.php">
        <img src="./img/movis.png" style="width: 100px ; height: 100px;">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

        <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Usuarios</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                </div>
            </div>


            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link"> Equipos Claro</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=equi_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=equi_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=equi_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Tecnicos y Auxiliares</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=emple_new" class="navbar-item">Nueva</a>
                    <a href="index.php?vista=emple_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=emple_search" class="navbar-item">Bucar Empleado</a>

                    <a href="index.php?vista=her_emple_new" class="navbar-item">Registro Herramientas</a>
                    <a href="index.php?vista=her_emple_list" class="navbar-item">Lista Herramientas</a>
                    <a href="index.php?vista=her_emple_search" class="navbar-item">Buscar Herramienta</a>

                    <a href="index.php?vista=equi_emple_new" class="navbar-item">Registro Equipos</a>
                    <a href="index.php?vista=equi_emple_list" class="navbar-item">Lista Equipos</a>
                    <a href="index.php?vista=equi_emple_search" class="navbar-item">Buscar Equipo</a>

                    <a href="index.php?vista=epp_emple_new" class="navbar-item">Registro EPPS</a>
                    <a href="index.php?vista=epp_emple_list" class="navbar-item">Lista EPPS</a>
                    <a href="index.php?vista=epp_emple_search" class="navbar-item">Buscar EPPS</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Herramientas</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Dotaciones</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=dot_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=dot_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=dot_search" class="navbar-item">Buscar</a>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">EPPS</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=epp_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=epp_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=epp_search" class="navbar-item">Buscar</a>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Inpecciones</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=alturas" class="navbar-item">Equipos y trabajo seguro en altura</a>
                    <a href="index.php?vista=botiquin" class="navbar-item">Botiquin</a>
                    <a href="index.php?vista=extintor" class="navbar-item">Extintor</a>
                    <a href="index.php?vista=dotacion" class="navbar-item">Dotación</a>
                    <a href="index.php?vista=epps" class="navbar-item">EPPS</a>
                    <a href="index.php?vista=escaleras" class="navbar-item">Escaleras</a>
                    <a href="index.php?vista=kit_carretera" class="navbar-item">Kit Carretera</a>
                    <a href="index.php?vista=moto" class="navbar-item">Motocicleta</a>
                    <a href="index.php?vista=vehiculo" class="navbar-item">Vehiculo</a>
                </div>
            </div>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id'];?>" class="button is-primary is-rounded">
                        Mi cuenta
                    </a>

                    <a href="index.php?vista=logout" class="button is-link is-rounded">
                        Salir
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</nav>
