<?php echo $this->element('menu_actividad'); ?>
<?php $this->layout = 'tablas' ?>
<?php echo $this->Html->script('tablefilter/tablefilter'); ?>

<!--div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>

    <li>	<a  href="../users/bienvenida"	 >Inicio</a>

        <?php echo $this->Html->link(__('Regresar'), array('action' => 'add')); ?> 

        <?php echo $this->Html->link(__('Nueva Actividad'), array('action' => 'add1')); ?>

        <?php echo $this->Html->link(__('Asignar actividad'), array('controller' => 'personas', 'action' => 'nuebus')); ?> 

        <?php echo $this->Html->link(__('Refrescar'), array('controller' => 'actividades', 'action' => 'nuebus')); ?> 
    </li> 

</div-->

<div class="actions">
    <ul>
        <li>
            <?php ?>
            <?php echo $this->Html->link(__('Export', true), array('controller' => 'actividades', 'action' => 'excel')); ?>
        </li>
    </ul>
</div>
<br/>


<div >

    <?php
    echo $this->Form->create("Actividad", array("action" => "nuebus"));
    //echo $this->Form->input("Busqueda", array("Label" => "Actividad a buscar"));
    //echo "Buscar por: " . $this->Form->select("Campo", $Campos, array("empty" => false));
    //<echo "Recuerde que puede realizar una consulta por cualquiera de las columnas mostradas";
    //echo $this->Form->end("Consultar");
    ?>

    <!--div class="actions">
                    <ul>
             <li>
    <?php ?>
    <?php echo $this->Html->link(__('Export', true), array('controller' => 'actividades', 'action' => 'excel')); ?>
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
                foreach ($l[0]["Actividad"] as $i => $v) {
                    echo "<th>" . $i . "</th>";
                }
            }
            echo "<th>Ver</th>";
            echo "<th>Url</th>";
            echo "<th>Edición </th>";
            echo "<th> </th>";
            
            ?>
        </tr>

        <div class="actions">

            <?php
            foreach ($l as $i => $v) {
                echo "<tr>";
                foreach ($v["Actividad"] as $j => $w) {
                    echo "<td>" . $w . "</td>";
                }

                echo "<td>" . $this->Html->link("Ver", "view/" . $v["Actividad"]["id"], array('target' => '_blank',)) . "</td>";
                echo "<td> <a id='copi' class='copi' href='javascript:getlink(" . $v["Actividad"]["id"] . ");' >Copiar URL </a></td>  " ;
                echo "<td>" . $this->Html->link("Actividad", "edit/" . $v["Actividad"]["id"]) . "</td>";
                echo "<td>" . $this->Html->link("Anexo", "editanexo/" . $v["Actividad"]["id"]) . "</td>";
             


            }
            ?></div>


    </table>
    <p>
        <?php
        //echo $this->Paginator->counter(array(
        //    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        //));
        ?>	</p>
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
            col_4: 'select',
            col_5: 'select',
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
            extensions:[{ name: 'sort' }]
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
//alert(location);
document.body.appendChild(aux);
aux.select();
document.execCommand("copy");
document.body.removeChild(aux);
}
    
</script>

