<?php
//$this->layout = 'formulario'
$this->layout = 'tablas'
?>
<?php echo $this->Html->script('tablefilter/tablefilter'); ?>

<div class="usuarios index">
    <?php
    echo $this->Form->create("Organizacion", array("action" => "nuebus"));
//echo $this->Form->input("Busqueda", array("Label" => "Organizacion a buscar"));
//echo "Buscar por: ".$this->Form->select("Campo",$Campos,array("empty" => false));
//echo $this->Form->end("Consultar");
    ?>

    <table cellpadding="0" cellspacing="0" id="list" class="table table-bordered table-hover">
        <tr>
            <?php
            if (empty($l)) {
                echo "Sin resultados";
            } else {
                foreach ($l[0]["Organizacion"] as $i => $v) {
                    echo "<th>" . $i . "</th>";
                }
            }
            echo "<th>Editar</th>";
            echo "<th>Ver</th>";
            ?>
        </tr>

        <div class="actions">

            <?php
            foreach ($l as $i => $v) {
                echo "<tr>";
                foreach ($v["Organizacion"] as $j => $w) {
                    echo "<td>" . $w . "</td>";
                }
                echo "<td>" . $this->Html->link("Ver", "view/" . $v["Organizacion"]["id"], array('target' => '_blank')) . "</td>";
                echo "<td>" . $this->Html->link("Editar ", "edit/" . $v["Organizacion"]["id"]) . "</td>";
                echo "</tr>";
            }
            ?></div>
    </table>
    <p>
        <?php
//	echo $this->Paginator->counter(array(
//	'format' => __('Página {:page} of {:pages}, Demostración {:current} Los registros de cada {:count} total, A partir del registro {:start}, Que concluye el {:end}')
//	));
        ?>	
    </p>
    <div class="paging">
        <?php
//		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
//		echo $this->Paginator->numbers(array('separator' => ''));
//		echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
    <div class="actions">
        <ul>
            <li><?php //echo $this->Html->link(__('Actualizar'), array('controller' => 'actividades', 'action' => 'nuebus'));  ?> </li>			
        </ul>
    </div>


</div>

<div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>
    <ul>
        <li> <a  href="../users/bienvenida"	 >Inicio</a></li>
        <li><?php echo $this->Html->link(__('Nueva Org Social'), array('controller' => 'organizaciones', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Nueva Institucion'), array('controller' => 'instituciones', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Nueva Org Comunitaria'), array('controller' => 'organizaciones', 'action' => 'add2')); ?></li>
        <li> <a href="http://www.fosyga.gov.co/Consultas/BDUABasedeDatosUnicadeAfiliados/AfiliadosBDUA/tabid/436/Default.aspx" target="_blank">Base FOSYGA</a></li>
        <li> <a href="https://www.sisben.gov.co/ConsultadePuntaje.aspx" target="_blank">Base SISBEN</a></li>	
        <li> <a href="http://www.contraloriagen.gov.co/web/guest/certificados-persona-natural" target="_blank">Contraloria</a></li>	
        <li> <a href="http://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>		
    </ul>
</div>

<script language="javascript" type="text/javascript">
    $(document).ready(function () {
        var filtersConfig = {
            base_path: '../js/tablefilter/',
            col_1: 'select',
            col_3: 'select',
            col_7: 'none',
            col_8: 'none',
            loader: true,
            paging: true,
            alternate_rows: true,
            rows_counter: true,
            btn_reset: true,
            status_bar: true,
            mark_active_columns: true,
            highlight_keywords: true,
            extensions: [{name: 'sort'}]
        }
        ;

        var tf = new TableFilter('list', filtersConfig);
        tf.init();
        $('.helpBtn').hide();
    });
</script>