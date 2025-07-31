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
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-theme.css', 'sb-admin-2.css', 'font-awesome.min.css', 'metisMenu.min.css', 'morris.css', 'dataTables.bootstrap.css', 'dataTables.responsive.css', 'jquery.dataTables.min.css', 'examples.css'));

    echo $this->Html->script(array('jquery-1.11.0', 'jquery', 'jquery.min', 'docs.min', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min', 'morris.min', 'morris-data', 'raphael-min', 'excanvas.min', 'funciones'));





    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('js');
    ?>



</head>

<!--body class="bs-docs-home"-->

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <?php echo $this->element('nav'); ?>
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>





    </div>
    <!-- /#page-wrapper -->








    <!-- /#wrapper -->

    <!-- jQuery -->


</body>


<!-- Navigation -->










</div>
<!-- /#page-wrapper -->








<!-- /#wrapper -->

<!-- jQuery -->


</body>










<footer class="footer">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Gestión de la Salud Publica. Versión 5.0 - 2022 <a href="https://www.saludpasto.gov.co/">Secretaria Municipal de Salud</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->