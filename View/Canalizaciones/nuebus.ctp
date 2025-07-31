<?php $this->layout = 'tablas' ?>
<?php echo $this->Html->script('tablefilter/tablefilter'); ?>

<div class="action">


    <div class="actions">
        <h3><?php echo __('Opciones'); ?></h3>
        <ul>
            <li> <a  href="../users/bienvenida" >Inicio</a>
                <?php echo $this->Html->link(__('Nueva canalización'), array('action' => 'add')); ?></li>
        </ul>
    </div>

    <table cellpadding="0" cellspacing="0" id="list" class="table table-bordered table-hover">
        <tr>
            <?php
            if (empty($l)) {
                echo "<br> Por favor seleccione otra opción de consulta </br>";
            } else {
                foreach ($l[0]["Canalizacion"] as $i => $v) {
                    echo "<th>" . $i . "</th>";
                }
            }
            echo "<th>Editar</th>";
            echo "<th>Ver</th>";
            ?>
        </tr>

        <div class="actions">

            <ul>
                <li>
                    <?php ?>
                    <?php echo $this->Html->link(__('Exportar', true), array('controller' => 'canalizaciones', 'action' => 'excel')); ?>
                </li>
            </ul>

            <?php
            foreach ($l as $i => $v) {
                echo "<tr>";
                foreach ($v["Canalizacion"] as $j => $w) {
                    echo "<td>" . $w . "</td>";
                }
                echo "<td>" . $this->Html->link("Ver", "view/" . $v["Canalizacion"]["id"]) . "</td>";
                echo "<td>" . $this->Html->link("Editar", "edit/" . $v["Canalizacion"]["id"]) . "</td>";
                echo "</tr>";
            }
            ?></div>
    </table>
    <p>
        <?php
//echo $this->Paginator->counter(array(
//    'format' => __('Página {:page} of {:pages}, Demostración {:current} Los registros de cada {:count} total, A partir del registro {:start}, Que concluye el {:end}')
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
            col_6: 'select',
            col_7: 'select',
            col_8: 'select',
            col_9: 'select',
            col_10: 'select',
            col_13: 'none',
            col_14: 'none',
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
