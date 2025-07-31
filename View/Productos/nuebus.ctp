
<?php $this->layout = 'tablas' ?>
<?php echo $this->Html->script('tablefilter/tablefilter'); ?>

<div >
    <?php
    echo $this->Form->create("Producto", array("action" => "nuebus"));
   
    ?>

    <!--div class="actions">
                    <ul>
             <li>
    <?php ?>
    <?php echo $this->Html->link(__('Export', true), array('controller' => 'productos', 'action' => 'excel')); ?>
             </li>
            </ul>
            </div-->
    <br/>

    <table cellpadding="0" cellspacing="0" id="list" class="table-hover table-striped table-bordered">
    <thead>

        <tr>
            <?php
            if (empty($l)) {
                echo "Sin resultados";
            } else {
                foreach ($l[0]["Producto"] as $i => $v) {
                    echo "<th>" . $i . "</th>";
                }
            }
            echo "<th>Ver avance</th>";
            echo "<th>Reportar avance</th>";
            echo "<th>Adjuntar soporte</th>";           
            echo "<th>Revisar avance</th>";
           
            ?>
        </tr>
        

        <div class="actions">

            <?php
            foreach ($l as $i => $v) {
                echo "<tr>";
                foreach ($v["Producto"] as $j => $w) {
                    echo "<td>" . $w . "</td>";
                }

               echo "<td>" .$this->Html->link($this->html->image('icon_view.png', array('border' => 0, 'height' => 20, 'title' => 'Ver informacion del producto')), "view/".$v["Producto"]["id"], array('escape' => false)). "</td>";
                
                echo "<td>" .$this->Html->link($this->html->image('editar.png', array('border' => 0, 'height' => 25, 'title' => 'Registrar avance de producto')), "editpic/".$v["Producto"]["id"], array('escape' => false)). "</td>";

                  echo "<td>" .$this->Html->link($this->html->image('rar.png', array('border' => 0, 'height' => 30, 'title' => 'Adjuntar producto')), "editanexo/".$v["Producto"]["id"], array('escape' => false)). "</td>";
             
                echo "<td>" .$this->Html->link($this->html->image('check.png', array('border' => 0, 'height' => 20, 'title' => 'Registrar avance SMS ')), "smsedit/".$v["Producto"]["id"], array('escape' => false)). "</td>";             

               //echo "<td> <a id='copi' class='copi' href='javascript:getlink(" . $v["Producto"]["id"] . ");' > <img src='/aplicacioncakephp/app2017/img/copylink.png' /> </a></td>  " ;               
               

            }
            ?></div>

      <thead>    
    </table>
    

</div>

<script language="javascript" type="text/javascript">
    $(document).ready(function () {
        var filtersConfig = {
            base_path: '../js/tablefilter/',
            col_2: 'select',
            col_3: 'select',
            col_4: 'none',
            col_5: 'none',
            col_6: 'select',
            col_7: 'select',
            col_8: 'none',
            col_9: 'none',
            col_10: 'none',
            col_11: 'none',
            col_12: 'none',
          

            loader: true,
            paging: true,
            alternate_rows: true,
            rows_counter: true,
            btn_reset: true,
            status_bar: true,
            mark_active_columns: true,
            highlight_keywords: true,
            extensions: [{name: 'sort'}]
        };

        var tf = new TableFilter('list', filtersConfig);
        tf.init();
        $('.helpBtn').hide();
    });
</script>

<script>
function getlink(id) {
var aux = document.createElement("input");

var locationAux = window.location.href;
var location = locationAux.replace("nuebus","view/");

aux.setAttribute("value",location + id);
alert("Cópiado en portapapeles: " + location + id );
//alert(location);
document.body.appendChild(aux);
aux.select();
document.execCommand("copy");
document.body.removeChild(aux);
}

function deleteActa(id) {
$.get("http://"+ document.domain +"/producto/delete/" + id + "/");
}

</script>

