<?php require "./inc2/session_start.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <?php include "./inc2/head.php"; ?>
</head>

<body>
    <?php

    if (!isset($_GET['vista']) || $_GET['vista'] == "") {
        $_GET['vista'] = "login";
    }


    if (is_file("./vistas2/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {

        /*== Cerrar sesion ==*/
        if ((!isset($_SESSION['id']) || $_SESSION['id'] == "") || (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == "")) {
            include "./vistas2/logout.php";
            exit();
        }

        include "./inc2/navbar2.php";

        include "./vistas2/" . $_GET['vista'] . ".php";

        include "./inc2/script.php";
    } else {
        if ($_GET['vista'] == "login") {
            include "./vistas2/login.php";
        } else {
            include "./vistas2/404.php";
        }
    }
    ?>
</body>

</html>