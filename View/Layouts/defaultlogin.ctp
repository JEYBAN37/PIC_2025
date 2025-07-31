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
// $cakeDescription = __d('cake_dev', 'Ciudad Bienestar: Sistema de Información');
// $cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
$cakeDescription = 'Ciudad Bienestar: Sistema de Información';
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login SICB</title>

    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-theme.css', 'sb-admin-2.css', 'font-awesome.min.css', 'metisMenu.min.css', 'morris.css', 'dataTables.bootstrap.css', 'dataTables.responsive.css', 'jquery.dataTables.min.css', 'examples.css'));
    echo $this->Html->script(array('jquery-1.11.0', 'jquery', 'jquery.min', 'docs.min', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min', 'morris.min', 'morris-data', 'raphael-min', 'excanvas.min', 'funciones'));
   
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('js');
    ?>

    <?php
    echo $this->Form->create("User");
    ?>

</head>

<!--body class="bs-docs-home"-->

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <!-- /.navbar-header -->
        <?php echo $this->element('nav'); ?>

        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">

                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <img src="../img/logo_Pasto.png" alt="Imagen de marcador genérico" width="190px" height="auto">
                        </div>
                    </li>
                   

                    <li>
                        <div class="input-group custom-search-form">

                            <!--label for="Usuario" class="col-md-4 col-form-label text-md-right">Ususario</label-->
                            <p> <input name="data[User][username]" maxlength="50" type="text" id="UserUsername" style="border-radius: 6px;" class="form-control" name="UserUsername" required="" autofocus="" placeholder="Usuario"> <br>
                                <!--label for="Password" class="col-md-4 col-form-label text-md-right">Password</label-->
                            </p>
                            <p><input name="data[User][password]" type="password" id="UserPassword" style="border-radius: 6px;" class="form-control" name="UserUsername" required="" autofocus="" placeholder="Contraseña"><br></p>


                            <!--label for="Captcha" class="col-md-4 col-form-label text-md-right">Captcha</label-->
                            <p> <canvas id="myCanvas" name="myCanvas" width="180" height="50" style="border-radius: 6px;"></canvas><br>
                                <button onclick="captcha();" type="submit"> <img src="../img/Actualizar.png" alt="Imagen de marcador genérico" width="20px" height="20px"></button>
                            </p>
                            <input name="data[User][codigo]" style="border-radius: 6px;" id="codigo" required="required" onkeypress="mayus(this);" type="text" class="form-control" name="UserUsername" required="" autofocus="" placeholder="Codigo verificación"><br>
                            <?php echo $this->Form->input("vercod", array("label" => "", "type" => "hidden", "style" => "width:200px;", "id" => "vercod")); ?> <br>
                            <input onfocus="verCod()" type="submit" class="btn btn-primary" value="Entrar">

                    <li>
                    <li class="divider"></li><br>

                    <div> <iframe width="250" height="auto" src="https://www.youtube.com/embed/olT1OKNZ54w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>


                    </li>

            </div>

            </li>

            </ul>
        </div>


        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->

    </div>
    <!-- /#page-wrapper -->

    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>

</body>


<footer class="footer">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Gestión de la Salud Publica. Versión 6.0 - 2023 <a href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->

<script type="text/javascript">
    captcha();
</script>