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
$cakeDescription = __d('cake_dev', 'Ciudad Bienestar: SICB');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>


    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>



    <!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->charset(); ?>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PIC Ciudad Bienestar </title>


    <?php

    echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min.css', 'bootstrap-theme.css', 'sb-admin-2.css', 'font-awesome.min.css', 'metisMenu.min.css'));
    echo $this->Html->script(array('jquery', 'jquery.min', 'docs.min', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min', 'jquery.dataTables.min'));

    echo $this->fetch('css');
    echo $this->fetch('script');

    ?>

    

</head>

<body>

    <div class="panel panel-default table-responsive">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->fetch('content'); ?>
                        <table width="100%" class="table table-striped table-bordered table-hover">
                            <tr>
                                <td style="font-style: inherit;font-family: serif;">
                                    <?php
                                    $usr = $this->Session->read("usr");
                                    if (isset($usr)) {
                                        echo __('Sesion: ');
                                        echo $usr . "<br/>";
                                    }
                                    ?>
                                </td>

                            </tr>


                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>

</body>






</html>

<script>
    //<![CDATA[
    function getlink() {
        var aux = document.createElement("input");
        aux.setAttribute("value", window.location.href);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
    }
    //]]>
</script>