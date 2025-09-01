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
                        {{ dataHome.title }}
                    </h2>
                </a>
            </div>

            <!-- Mobile button -->
            <button class="md:hidden p-2" @click="isSidebarOpen = !isSidebarOpen">
                <div class="w-6 h-6 flex flex-col justify-center items-center">
                    <span
                        :class="['bg-gray-600 block transition-all duration-300 ease-out h-0.5 w-6 rounded-sm', isSidebarOpen ? 'rotate-45 translate-y-1' : '-translate-y-0.5']"></span>
                    <span
                        :class="['bg-gray-600 block transition-all duration-300 ease-out h-0.5 w-6 rounded-sm my-0.5', isSidebarOpen ? 'opacity-0' : 'opacity-100']"></span>
                    <span
                        :class="['bg-gray-600 block transition-all duration-300 ease-out h-0.5 w-6 rounded-sm', isSidebarOpen ? '-rotate-45 -translate-y-1' : 'translate-y-0.5']"></span>
                </div>
            </button>

            <!-- Desktop Icons -->
            <div class="hidden p-6 md:flex items-center gap-8">

                <!-- Botón admin solo si grupoUsuario == 1 -->
                <button v-if="grupoUsuario === '1'" type="button" class="p-0 bg-transparent border-none"
                    @click="goTo('/homePage/userAdmin')" aria-label="Ir a Administrador">
                    <img class="w-4 h-4 object-cover cursor-pointer" :alt="dataHome.alt"
                        :src="dataHome.adminIcon.default">
                </button>

                <!-- Icons dinámicos -->
                <button v-for="icon in dataHome.icons" :key="icon.key" type="button"
                    class="p-0 bg-transparent border-none" @click="icon.action" aria-label="Ir a {{ icon.key }}">
                    <img class="w-4 h-4 object-cover cursor-pointer" :alt="dataHome.alt" :src="icon.default">
                </button>
            </div>
        </div>
    </nav>


    <div class="flex pt-[65px] h-screen">
        <!-- Botón para abrir/cerrar en mobile (ejemplo) -->
        <div class="md:hidden fixed top-3 left-3 z-50">
            <button id="toggleSidebar" class="px-3 py-2 rounded-lg border bg-white shadow text-gray-700">
                Menú
            </button>
        </div>

        <aside id="sidebar" class="fixed md:relative top-[65px] md:top-0 left-0 z-40
             w-[268px] h-[calc(100vh-65px)]
             bg-white border-r shadow p-2 border-gray-200
             transform transition-transform duration-300 ease-in-out
             -translate-x-full md:translate-x-0">
            <div class="p-6 h-full relative">
                <!-- Header / Usuario -->
                <div class="mb-6 pl-2">
                    <h1 id="nombreUsuario" class="text-lg font-semibold">{{ nombreUsuario }}</h1>
                    <p id="rolUsuario" class="text-sm text-green-600">{{ rolUsuario }}</p>
                </div>

                <!-- Menú -->
                <nav id="menu" class="space-y-1">
                    <!-- Item 1 (sin submenú) -->
                    <div class="menu-item" data-id="dashboard">
                        <button type="button" data-href="/react/#/homePage"
                            class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                            <div class="flex items-center gap-3">
                                <img class="icon w-4 h-4 object-cover" alt="Dashboard icon"
                                    src="<?php echo $this->webroot; ?>/img/update/resultados.png"
                                    data-src-default="<?php echo $this->webroot; ?>/img/update/resultados.png"
                                    data-src-hover="<?php echo $this->webroot; ?>/img/update/resultadosHover.png" />
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
                                <img class="icon w-4 h-4 object-cover" alt="Reportes icon"
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
                            <button
                                class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                data-href="<?php echo $this->Html->url(['controller' => 'proactividades', 'action' => 'add']); ?>">
                                Nueva Sistematización
                            </button>
                            <button
                                class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                data-href="<?php echo $this->Html->url(['controller' => 'procesoregistros', 'action' => 'index']); ?>">
                                Registros Sesiones
                            </button>
                            <button
                                class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                data-href="<?php echo $this->Html->url(['controller' => 'procesoregistros', 'action' => 'add']); ?>">
                                Agregar Sesion
                            </button>
                        </div>
                    </div>

                    <!-- Item 3 (con submenú) -->
                    <div class="menu-item" data-id="config" data-has-arrow="true">
                        <button type="button"
                            class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                            <div class="flex items-center gap-3">
                                <img class="icon w-4 h-4 object-cover" alt="Config icon"
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
                            <button
                                class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                data-href="<?php echo $this->Html->url(['controller' => 'actas', 'action' => 'add']); ?>">
                                Agregar Acta
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-id="config" data-has-arrow="true">
                        <button type="button"
                            class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                            <div class="flex items-center gap-3">
                                <img class="icon w-4 h-4 object-cover" alt="Config icon"
                                    src="<?php echo $this->webroot; ?>/img/update/documento.png"
                                    data-src-default="<?php echo $this->webroot; ?>/img/update/anexo.png"
                                    data-src-hover="<?php echo $this->webroot; ?>/img/update/anexoHover.png" />
                                <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                    Anexo Tecnico
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
                                <img class="icon w-4 h-4 object-cover" alt="Config icon"
                                    src="<?php echo $this->webroot; ?>/img/update/portaPapeles.png"
                                    data-src-default="<?php echo $this->webroot; ?>/img/update/portaPapeles.png"
                                    data-src-hover="<?php echo $this->webroot; ?>/img/update/portaPapelesHover.png" />
                                <span class="label font-normal text-sm text-gray-600 group-hover:text-[#155dfc]">
                                    Planes de Sesion
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
                                data-href="<?php echo $this->Html->url(['controller' => 'plsesiones', 'action' => 'nuebus']); ?>">
                                Registros Planes de Sesion
                            </button>
                            <button
                                class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                data-href="<?php echo $this->Html->url(['controller' => 'plsesiones', 'action' => 'add']); ?>">
                                Agregar Plan de Sesion
                            </button>
                        </div>
                    </div>


                    <div class="menu-item" data-id="config" data-has-arrow="true">
                        <button type="button"
                            class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                            <div class="flex items-center gap-3">
                                <img class="icon w-4 h-4 object-cover" alt="Config icon"
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
                                Registros Eventos
                            </button>
                            <button
                                class="subitem block w-full text-left text-[13px] text-gray-500 hover:text-[#155dfc] hover:bg-gray-100 rounded p-1 cursor-pointer"
                                data-href="<?php echo $this->Html->url(['controller' => 'infoeventos', 'action' => 'add']); ?>">
                                Agregar Evento
                            </button>
                        </div>
                    </div>


                    <div class="menu-item" data-id="config" data-has-arrow="true">
                        <button type="button"
                            class="trigger flex items-center justify-between w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer group focus:outline-none">
                            <div class="flex items-center gap-3">
                                <img class="icon w-4 h-4 object-cover" alt="Config icon"
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
            <button id="toggleSidebar" onclick="toggleSidebar()"
                class="px-1 py-2 rounded-r-lg   bg-white shadow text-gray-700 hover:bg-gray-300">
                <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left-to-line-icon lucide-arrow-left-to-line">
                    <path d="M3 19V5" />
                    <path d="m13 6-6 6 6 6" />
                    <path d="M7 12h14" />
                </svg>
            </button>
        </div>



        <!-- Contenido principal -->
        <main class="flex-1 ml-0 p-8 overflow-y-auto">
            <?php echo $this->Session->flash(); ?>
            <div class="relative z-10">
                <?php echo $this->fetch('content'); ?>
            </div>
        </main>
    </div>


    <script>
        const URLCAKE = "http://localhost/PIC";
        const {
            createApp
        } = Vue;

        createApp({
            data() {
                return {
                    isSidebarOpen: false,
                    grupoUsuario: "1",
                    nombreUsuario: "Usuario",
                    rolUsuario: "Administrador",
                    dataHome: {
                        alt: "Logo",
                        img: "https://via.placeholder.com/40x50",
                        href: "/",
                        title: "SICB",
                        adminIcon: {
                            default: "<?php echo $this->webroot; ?>/img/update/adminHover.png",
                        },
                        icons: [{
                                key: "Home",
                                default: "<?php echo $this->webroot; ?>/img/update/hogar.png",
                                action: () => {
                                    window.location.href = `/react/#/homePage`;
                                }
                            },
                            {
                                key: "Ayuda",
                                default: "<?php echo $this->webroot; ?>/img/update/ayuda.png",
                                action: () => {
                                    window.location.href = `${URLCAKE}/users/home`;
                                }
                            },
                            {
                                key: "Salir",
                                default: "<?php echo $this->webroot; ?>/img/update/cerrarSesion.png",
                                action: () => {
                                    window.location.href = `${URLCAKE}/users/salir`;
                                }
                            }
                        ]
                    }
                }
            },
            methods: {
                goTo(path) {
                    window.location.href = path;
                }
            },
            mounted() {
                <?php
                $grupoUsuario = isset($_SESSION['Auth']['User']['group_id']) ? $_SESSION['Auth']['User']['group_id'] : '';
                $nombreUsuario = isset($_SESSION['Auth']['User']['nombre']) ? $_SESSION['Auth']['User']['nombre'] : '';
                ?>
                this.grupoUsuario = "<?php echo $grupoUsuario; ?>";
                this.nombreUsuario = "<?php echo $nombreUsuario; ?>";
                let rol = "";
                switch ("<?php echo $grupoUsuario; ?>") {
                    case "1":
                        rol = "Administrador";
                        break;
                    case "2":
                        rol = "Referente";
                        break;
                    case "3":
                        rol = "Operador PIC";
                        break;
                    default:
                        rol = "Invitado";
                }
                this.rolUsuario = rol;
            }
        }).mount('#app');

        // ----- Estado de sidebar (mobile) -----
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleSidebar');
        let isSidebarOpen = false;

        const applySidebarTransform = () => {
            if (window.matchMedia('(min-width: 768px)').matches) {
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

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const arrow = document.getElementById('arrow');
            sidebar.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }
    </script>
</body>