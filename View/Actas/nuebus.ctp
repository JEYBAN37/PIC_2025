
<?php $this->layout = 'tablas' ?>
<?php echo $this->Html->script('tablefilter/tablefilter'); ?>

<div >
    <?php
    echo $this->Form->create("Acta", array("action" => "nuebus"));
    //echo $this->Form->input("Busqueda", array("Label" => "Acta a buscar"));
    //echo "Buscar por: " . $this->Form->select("Campo", $Campos, array("empty" => false));
    //echo "Recuerde que puede realizar una consulta por cualquiera de las columnas mostradas";
    //echo $this->Form->end("Consultar");
    ?>

    <!--div class="actions">
                    <ul>
             <li>
    <?php ?>
    <?php echo $this->Html->link(__('Export', true), array('controller' => 'actas', 'action' => 'excel')); ?>
             </li>
            </ul>
            </div-->
    <br/>

    <table cellpadding="0" cellspacing="0" id="list" class="table table-bordered table-hover">
        <tr>
            <?php
            if (empty($l)) {
                echo "Sin resultados";
            } else {
                foreach ($l[0]["Acta"] as $i => $v) {
                    echo "<th>" . $i . "</th>";
                }
            }
            echo "<th>Vista impresión</th>";
            echo "<th>Editar texto </th>";
            echo "<th>Editar soprte</th>";
            echo "<th>Copiar url</th>";
            echo "<th>Eliminar </th>";
            ?>
        </tr>

        <div class="actions">

            <?php
            foreach ($l as $i => $v) {
                echo "<tr>";
                foreach ($v["Acta"] as $j => $w) {
                    echo "<td>" . $w . "</td>";
                }

               echo "<td>" .$this->Html->link($this->html->image('icon_view.png', array('border' => 0, 'height' => 20, 'title' => 'Ver informacion de acta')), "view/".$v["Acta"]["id"], array('escape' => false)). "</td>";

                /*echo "<td>" . $this->Html->link("Ver", "view/" . $v["Acta"]["id"], array('target' => '_blank')) . "</td>";*/
                
                echo "<td>" .$this->Html->link($this->html->image('editar.png', array('border' => 0, 'height' => 20, 'title' => 'Editar la información')), "edit/".$v["Acta"]["id"], array('escape' => false)). "</td>";

                /*echo "<td>" . $this->Html->link("Acta", "edit/" . $v["Acta"]["id"]) . "</td>";*/
                echo "<td>" .$this->Html->link($this->html->image('icon_pdf.png', array('border' => 0, 'height' => 20, 'title' => 'Editar soporte ')), "editanexo/".$v["Acta"]["id"], array('escape' => false)). "</td>";
               /* echo "<td>" . $this->Html->link("Anexo", "editanexo/" . $v["Acta"]["id"]) . "</td>";*/

               echo "<td> <a id='copi' class='copi' href='javascript:getlink(" . $v["Acta"]["id"] . ");' > <img src='/SICB/app2020/img/copylink.png' /> </a></td>  " ;
                
                echo "<td>" .
                    $this->Html->link(
                        $this->html->image('borrar.png', array('border' => 0, 'height' => 25, 'title' => 'Borrar registro')), 
                        "delete/".$v["Acta"]["id"], 
                        array('escape' => false),
                        __('Esta seguro de borrar el registro numero %s?', $v['Acta']['id'])). "</td>";
                //echo "<td> <a id='copi' class='copi' href='javascript:getlink(" . $v["Acta"]["id"] . ");' > <img src='/aplicacioncakephp/app2017/img/icon_pdf.png' /> </a></td>  " ;

            }
            ?></div>
    </table>
    <p>
        <?php
        //echo $this->Paginator->counter(array(
        //    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        //));
        ?>  
    </p>
    <div class="paging">
        <?php
        //echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
        //echo $this->Paginator->numbers(array('separator' => ''));
        //echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
        ?>        
    </div>

</div>

<script language="javascript" type="text/javascript">
    $(document).ready(function () {
        var filtersConfig = {
            base_path: '../js/tablefilter/',
            col_3: 'none',
            col_4: 'none',
            col_5: 'none',
            col_8: 'none',
            col_9: 'none',
            col_10: 'none',
            col_11: 'none',
            col_12: 'none',
            col_13: 'none',

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
$.get("http://"+ document.domain +"/acta/delete/" + id + "/");
}

</script>

