<?php

use App\Vendedor;

estaAutenticado();

$id = $_SESSION['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
$vendedor = Vendedor::find($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="/datatables/dataTables.bootstrap5.min.js"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <h2><?php echo $vendedor->nombre ?></h2>
        <div class="header__img">
            <img src="/imagenes/<?php echo $vendedor->imagen ?>" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="/admin.php" class="nav__logo">
                    <i class="bx bx-layer nav__logo-icon"></i>
                    <span class="nav__logo-name">DCS3-Dashboard</span>
                </a>
                <div class="nav__list">
                    <a href="/admin.php" class="nav_link">
                        <i class="bx bx-grid-alt nav__icon"></i>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <a href="/admin/vendedores/" class="nav_link">
                        <i class="bx bx-user nav__icon"></i>
                        <span class="nav__name">Registro Vendedores</span>
                    </a>
                    <a href="/admin/lugares/" class="nav_link">
                        <i class="bx bx-message-square nav__icon"></i>
                        <span class="nav__name">Registro de lugares Turistico</span>
                    </a>
                    <a href="/admin/paquetes/" class="nav_link">
                        <i class="bx bx-bookmark nav__icon"></i>
                        <span class="nav__name">Registro Paquetes</span>
                    </a>
                    <a href="/admin/usuarios/" class="nav_link">
                        <i class="bx bx-folder nav__icon"></i>
                        <span class="nav__name">Registro de clientes</span>
                    </a>
                    <!-- <a href="/admin/vendedores" class="nav_link">
                        <i class="bx bx-bar-chart-alt-2 nav__icon"></i>
                        <span class="nav__name"></span>
                    </a> -->
                </div>
                <a href="/cerrarsesion.php" class="nav_link">
                    <i class="bx bx-log-out nav__icon"></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </div>
        </nav>
    </div>