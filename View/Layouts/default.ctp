<?php

/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'Ciudad Bienestar: Sistema de Información');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SICB PIC 2025</title>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    // 🚫 No cargamos Bootstrap
    echo $this->Html->meta('icon');

    // ✅ Tailwind CDN
    echo $this->Html->css("https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css");

    // ✅ DataTables CSS
    echo $this->Html->css("https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css");

    // jQuery y DataTables
    echo $this->Html->script("https://code.jquery.com/jquery-3.6.0.min.js");
    echo $this->Html->script("https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js");
    echo $this->Html->script('ckeditor/ckeditor');
    ?>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Choices.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker"></script>
    <!-- Incluye DataTables y Buttons -->

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script> <!-- 👈 necesario -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <!-- JS -->
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <style>
        /* transición suave para submenús */
        .submenu {
            overflow: hidden;
            transition: max-height 0.25s ease-in-out, opacity 0.25s ease-in-out;
            max-height: 0;
            opacity: 0;
        }

        .submenu.open {
            max-height: 600px;
            /* suficiente para su contenido */
            opacity: 1;
        }

        /* rotación de flecha (por defecto 270° como en tu TSX) */
        .arrow {
            transform: rotate(270deg);
            transition: transform .2s ease;
        }

        .arrow.open {
            transform: rotate(0deg);
        }
    </style>
</head>

<?php $tipoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : ''; ?>

<!--body class="bs-docs-home"-->

<body id="app" class="bg-white">

    <!-- Navbar -->

    <nav class="w-full h-[65px] fixed top-0 left-0 z-50 shadow p-2 bg-white border-b border-gray-200">
        <div class="flex items-center justify-between h-full px-4">

            <!-- Logo + Title -->
            <div class="flex items-center gap-2">
                <img class="w-8 h-[50px] object-cover" alt="dataHome.alt"
                    src="<?php echo $this->webroot; ?>/img/update/logoPic.png">
                <a href="/react/#/homePage">
                    <h2
                        class="text-[#155dfc] text-2xl md:text-[28px] font-bold whitespace-nowrap hover:text-green-600 transition-colors">
                        SICB
                    </h2>
                </a>
            </div>

            <!-- Desktop Icons -->
            <div class="hidden p-6 md:flex items-center gap-4">

                <!-- Botón admin solo si grupoUsuario == 1 -->
                    <?php
                                if ($tipoUsuario === '1' || $tipoUsuario === '3') :
                                ?>
                <button type="button" class="p-2 bg-transparent border-none hover:bg-gray-200 rounded" onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'productos', 'action' => 'editpic']); ?>'"
                    aria-label="Ir a vista de edición PIC">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save text-blue-600">
                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    </svg>
                </button>

                    <?php
                                    endif;
                    ?>

                                        <?php
                                if ($tipoUsuario === '1' || $tipoUsuario === '2') :
                                ?>
                <button type="button" class="p-2 bg-transparent border-none hover:bg-gray-200 rounded" onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'productos', 'action' => 'smsedit']); ?>'"
                    aria-label="Ir a vista de edición SMS">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save text-blue-600">
                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    </svg>
                </button>

                    <?php
                                    endif;
                    ?>


                <!-- Icons dinámicos -->
                <!-- Botón admin solo si grupoUsuario == 1 -->
                <button type="button" class="p-2 bg-transparent border-none hover:bg-gray-200 rounded" onclick="window.location.href='<?php echo $this->Html->url(['controller' => 'users', 'action' => 'salir']); ?>'"
                    aria-label="Cerrar Sesión">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save-icon lucide-save text-blue-600">
                        <path d="m16 17 5-5-5-5" />
                        <path d="M21 12H9" />
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>


    <div class="flex pt-[65px]">
        <!-- Botón para abrir/cerrar en mobile (ejemplo) -->
        <div class="md:hidden fixed top-3 left-3 z-50">
            <button id="toggleSidebar" class="px-3 py-2 rounded-lg border bg-white shadow text-gray-700">
                Menú
            </button>
        </div>

        <div id="sidebarContainer" class="flex fixed top-[65px] left-0 z-40
         w-[300px] h-[calc(100vh-65px)]  overflow-y-auto p-2 ">

            <aside id="sidebar" class="w-full
         bg-white border-r shadow border-gray-200
         transform transition-transform duration-300 ease-in-out
         -translate-x-full md:translate-x-0">
                <div class="p-6 h-full relative">
                    <!-- Header / Usuario -->
                    <div class="mb-6 pl-2">
                        <h1 id="nombreUsuario" class="text-md font-semibold"><?php

                                                                                $nombreUsuario = strtoupper(isset($_SESSION['Auth']['User']['nombre']) ? $_SESSION['Auth']['User']['nombre'] : '');
                                                                                echo $nombreUsuario;
                                                                                ?></h1>
                        <p id="rolUsuario" class="text-sm text-green-600"><?php


                                                                            $grupoUsuario = $_SESSION['Auth']['User']['group_id'];
                                                                            $rol = "";
                                                                            if ($grupoUsuario === '1') {
                                                                                $rol = "Administrador";
                                                                            } elseif ($grupoUsuario === '2') {
                                                                                $rol = "Referente";
                                                                            } elseif ($grupoUsuario === '3') {
                                                                                $rol = "Operador PIC";
                                                                            } else {
                                                                                $rol = "Invitado";
                                                                            }
                                                                            echo $rol;
                                                                            ?>
                        </p>
                    </div>

                    <!-- Menú -->
                    <nav id="menu" class="space-y-1">
                        <!-- Item 1 (sin submenú) -->
                        <div class="menu-item" data-id="dashboard">
                            <button
                                type="button"
                                data-href="<?php echo $this->Html->url(['controller' => 'productos', 'action' => 'editpic']); ?>"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <?php if ($tipoUsuario === '1' || $tipoUsuario === '3') : ?>
                                    <img
                                        class="icon w-4 h-4 object-cover"
                                        alt="Dashboard icon"
                                        src="<?php echo $this->webroot; ?>/img/update/resultados.png"
                                        data-href="<?php echo $this->Html->url(['controller' => 'productos', 'action' => 'editpic']); ?>">

                                    <?php  endif ?>    

                                    <?php if ($tipoUsuario === '1' || $tipoUsuario === '2') : ?>
                                    <img
                                        class="icon w-4 h-4 object-cover"
                                        alt="Dashboard icon"
                                        src="<?php echo $this->webroot; ?>/img/update/resultados.png"
                                        data-href="<?php echo $this->Html->url(['controller' => 'productos', 'action' => 'smsedit']); ?>">

                                    <?php  endif ?> 

                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                        Resultados
                                    </span>
                                </div>
                            </button>
                        </div>

                        <!-- Item 2 (con submenú) -->
                        <div class="menu-item" data-id="reportes" data-has-arrow="true">
                            <button type="button" data-href="/react/#/homePage/reportes"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <img
                                        class="icon w-4 h-4 object-cover"
                                        alt="Reportes icon"
                                        src="<?php echo $this->webroot; ?>/img/update/documento.png"
                                        data-src-default="<?php echo $this->webroot; ?>/img/update/documento.png"
                                        data-src-hover="<?php echo $this->webroot; ?>/img/update/docHover.png" />
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                        Sistematizaciones
                                    </span>

                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-[#155dfc]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>

                            <!-- Submenú -->
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'proactividades', 'action' => '/index']); ?>">
                                    Registros Sistematizaciones
                                </button>

                                <?php
                                if ($tipoUsuario === '1' || $tipoUsuario === '3') :
                                ?>

                                    <button
                                        class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                        data-href="<?php echo $this->Html->url(['controller' => 'proactividades', 'action' => 'add']); ?>">
                                        Nueva Sistematización
                                    </button>
                                    <button
                                        class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                        data-href="<?php echo $this->Html->url(['controller' => 'procesoregistros', 'action' => 'add']); ?>">
                                        Nuevo Encuentro
                                    </button>
                                <?php
                                endif;
                                ?>

                            </div>
                        </div>

                        <!-- Item 3 (con submenú) -->
                        <div class="menu-item" data-id="config" data-has-arrow="true">
                            <button type="button"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <img
                                        class="icon w-4 h-4 object-cover"
                                        alt="Config icon"
                                        src="<?php echo $this->webroot; ?>/img/update/documento.png"
                                        data-src-default="<?php echo $this->webroot; ?>/img/update/documento.png"
                                        data-src-hover="<?php echo $this->webroot; ?>/img/update/docHover.png" />
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                        Actas
                                    </span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-[#155dfc]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'actas', 'action' => 'index']); ?>">
                                    Registros Actas
                                </button>

                                <?php
                                if ($tipoUsuario === '3' || $tipoUsuario === '1') :
                                ?>
                                    <button
                                        class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                        data-href="<?php echo $this->Html->url(['controller' => 'actas', 'action' => 'add']); ?>">
                                        Agregar Acta
                                    </button>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>

                        <div class="menu-item" data-id="config" data-has-arrow="true">
                            <button type="button"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <img
                                        class="icon w-4 h-4 object-cover"
                                        alt="Config icon"
                                        src="<?php echo $this->webroot; ?>/img/update/documento.png"
                                        data-src-default="<?php echo $this->webroot; ?>/img/update/anexo.png"
                                        data-src-hover="<?php echo $this->webroot; ?>/img/update/anexoHover.png" />
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                        Anexo Técnico
                                    </span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-[#155dfc]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'productos', 'action' => 'index']); ?>">
                                    Productos
                                </button>
                            </div>
                        </div>


                        <div class="menu-item" data-id="config" data-has-arrow="true">
                            <button type="button"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <img
                                        class="icon w-4 h-4 object-cover"
                                        alt="Config icon"
                                        src="<?php echo $this->webroot; ?>/img/update/portaPapeles.png"
                                        data-src-default="<?php echo $this->webroot; ?>/img/update/portaPapeles.png"
                                        data-src-hover="<?php echo $this->webroot; ?>/img/update/portaPapelesHover.png" />
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                        Planes de Sesión
                                    </span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-[#155dfc]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'plsesiones', 'action' => 'index']); ?>">
                                    Registros Planes de Sesión
                                </button>

                                <?php
                                if ($tipoUsuario === '3' || $tipoUsuario === '1') :
                                ?>
                                    <button
                                        class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                        data-href="<?php echo $this->Html->url(['controller' => 'plsesiones', 'action' => 'add']); ?>">
                                        Agregar Plan de Sesión
                                    </button>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>


                        <div class="menu-item" data-id="config" data-has-arrow="true">
                            <button type="button"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <img
                                        class="icon w-4 h-4 object-cover"
                                        alt="Config icon"
                                        src="<?php echo $this->webroot; ?>/img/update/documento.png"
                                        data-src-default="<?php echo $this->webroot; ?>/img/update/documento.png"
                                        data-src-hover="<?php echo $this->webroot; ?>/img/update/docHover.png" />
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                        Informes Eventos
                                    </span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-[#155dfc]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                    data-href="<?php echo $this->Html->url(['controller' => 'infoeventos', 'action' => 'index']); ?>">
                                    Registros Aciones Informativas
                                </button>
                                <?php
                                if ($tipoUsuario === '3' || $tipoUsuario === '1') :
                                ?>
                                    <button
                                        class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                        data-href="<?php echo $this->Html->url(['controller' => 'infoeventos', 'action' => 'add']); ?>">
                                        Agregar Acción Informativa
                                    </button>
                                <?php
                                endif;
                                ?>

                            </div>
                        </div>


                        <div class="menu-item" data-id="config" data-has-arrow="true">
                            <button type="button"
                                class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                                <div class="flex items-center gap-3">
                                    <img
                                        class="icon w-4 h-4 object-cover"
                                        alt="Config icon"
                                        src="<?php echo $this->webroot; ?>/img/update/historico.png"
                                        data-src-default="<?php echo $this->webroot; ?>/img/update/historico.png"
                                        data-src-hover="<?php echo $this->webroot; ?>/img/update/historicoHover.png" />
                                    <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                        Historico PIC
                                    </span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="arrow size-3.5 text-gray-400 group-hover:text-[#155dfc]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div class="submenu ml-8 mt-1 space-y-1">
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer">
                                    PIC 2024
                                </button>
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer">
                                    PIC 2023
                                </button>
                                <button
                                    class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer">
                                    PIC 2022
                                </button>
                            </div>
                        </div>

                    </nav>

                    <!-- Footer Logos -->
                    <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                        <img class="w-[121px] h-[68px] object-contain" alt="WhatsApp logo"
                            src="https://c.animaapp.com/DhO0cdaV/img/whatsapp-image-2025-07-03-at-9-34-32-am-removebg-preview-2.svg" />
                        <img class="w-[98px] h-[55px] object-contain" alt="Ciudad Bienestar logo"
                            src="https://c.animaapp.com/DhO0cdaV/img/logo-ciudad-bienestar-mesa-de-trabajo-1-removebg-preview-1.svg" />
                    </div>
                </div>
            </aside>

            <div class="flex items-start">
                <button id="toggleSidebar" onclick="toggleSidebar()" class="px-1 py-2 rounded-r-lg   bg-white shadow text-gray-700 hover:bg-gray-300">
                    <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left-to-line-icon lucide-arrow-left-to-line">
                        <path d="M3 19V5" />
                        <path d="m13 6-6 6 6 6" />
                        <path d="M7 12h14" />
                    </svg>
                </button>
            </div>
        </div>



        <!-- Contenido principal -->
        <main id="mainContent" class="flex-1 p-6 md:ml-[280px] transition-all duration-300 ">
            <?php echo $this->Session->flash(); ?>
            <div class="relative z-10">
                <?php echo $this->fetch('content'); ?>
            </div>
        </main>
    </div>


    <script>
        // ----- Estado de sidebar (mobile) -----
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleSidebar');
        const mainContent = document.getElementById('mainContent');
        let isSidebarOpen = false;

        const applySidebarTransform = () => {
            if (window.matchMedia('(min-width: 888px)').matches) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('md:translate-x-0');
            } else {
                sidebar.classList.toggle('-translate-x-full', !isSidebarOpen);
            }
        };

        toggleBtn?.addEventListener('click', () => {
            isSidebarOpen = !isSidebarOpen;
            applySidebarTransform();
        });

        window.addEventListener('resize', applySidebarTransform);
        applySidebarTransform();

        // ----- Lógica de menú -----
        const menu = document.getElementById('menu');
        let activeItemId = null;

        menu.addEventListener('click', (e) => {
            const btn = e.target.closest('button');
            if (!btn) return;

            const container = btn.closest('.menu-item');
            const isSubitem = btn.classList.contains('subitem');

            if (isSubitem) {
                const href = btn.getAttribute('data-href');
                if (href) {
                    window.location.href = href;
                    return;
                }
            }

            if (!container) return;

            const id = container.getAttribute('data-id');
            const hasArrow = container.hasAttribute('data-has-arrow');

            setActiveItem(container, id);

            // Si no tiene submenú, redirige directamente
            if (!hasArrow) {
                const href = btn.getAttribute('data-href');
                if (href) {
                    window.location.href = href;
                    return;
                }
            }

            // Solo permitir un submenú abierto a la vez
            if (hasArrow) {
                // Cerrar todos los submenús excepto el actual
                document.querySelectorAll('.menu-item[data-has-arrow="true"]').forEach(mi => {
                    const submenu = mi.querySelector('.submenu');
                    const arrow = mi.querySelector('.arrow');
                    if (mi !== container) {
                        submenu?.classList.remove('open');
                        arrow?.classList.remove('open');
                    }
                });

                const submenu = container.querySelector('.submenu');
                const arrow = container.querySelector('.arrow');
                const isOpen = submenu.classList.contains('open');
                submenu.classList.toggle('open', !isOpen);
                arrow.classList.toggle('open', !isOpen);
            }
        });

        menu.addEventListener('mouseover', (e) => {
            const item = e.target.closest('.menu-item');
            if (!item) return;
            const icon = item.querySelector('.icon');
            if (!icon) return;
            const id = item.getAttribute('data-id');
            if (activeItemId === id) return;
            const hoverSrc = icon.getAttribute('data-src-hover');
            if (hoverSrc) icon.src = hoverSrc;
        });

        menu.addEventListener('mouseout', (e) => {
            const item = e.target.closest('.menu-item');
            if (!item) return;
            const icon = item.querySelector('.icon');
            if (!icon) return;
            const id = item.getAttribute('data-id');
            if (activeItemId === id) return;
            const defSrc = icon.getAttribute('data-src-default');
            if (defSrc) icon.src = defSrc;
        });

        function setActiveItem(container, id) {
            document.querySelectorAll('.menu-item').forEach(mi => {
                const label = mi.querySelector('.label');
                const icon = mi.querySelector('.icon');
                if (label) label.classList.remove('text-[#155dfc]');
                if (icon) {
                    const def = icon.getAttribute('data-src-default');
                    if (def) icon.src = def;
                }
            });
            activeItemId = id;
            const label = container.querySelector('.label');
            const icon = container.querySelector('.icon');
            if (label) label.classList.add('text-[#155dfc]');
            if (icon) {
                const hov = icon.getAttribute('data-src-hover');
                if (hov) icon.src = hov;
            }
        }
        // ...existing code...
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const arrow = document.getElementById('arrow');
            const sidebarContainer = document.getElementById('sidebarContainer');
            const mainContent = document.getElementById('mainContent');

            sidebar.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');

            // Quita o pone el margen izquierdo al main
            if (sidebar.classList.contains('hidden')) {
                mainContent.classList.remove('md:ml-[280px]');
                sidebarContainer.classList.remove('w-[300px]');
            } else {
                mainContent.classList.add('md:ml-[280px]');
                sidebarContainer.classList.add('w-[300px]');
            }
        }
        // ...existing code...
    </script>
</body>