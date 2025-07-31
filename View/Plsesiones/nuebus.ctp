<?php $this->layout = 'tablas' ?>
<?php echo $this->Html->script('tablefilter/tablefilter'); ?>
<div>
    <h2><?php //echo __('Plsesiones'); 
        ?></h2>
    <table cellpadding="0" cellspacing="0" id="list" class="table-hover table-striped table-bordered">
    

    <thead>
        <tr>
            <?php
            if (empty($l)) {
                echo "Sin resultados";
            } else {
                foreach ($l[0]["Plsesion"] as $i => $v) {
                    echo "<th>" . $i . "</th>";
                }
            }
            echo "<th>Ver</th>";
            echo "<th>Agregar Momento</th>";
            echo "<th>Edición plan</th>";
            echo "<th>Edición Anexo</th>";
            echo "<th>URL</th>";
            ?>
        </tr>
        <div class="actions">

            <?php
            foreach ($l as $i => $v) {
                echo "<tr>";
                foreach ($v["Plsesion"] as $j => $w) {
                    echo "<td>" . $w . "</td>";
                }

                echo "<td>" . $this->Html->link("Ver", "view/" . $v["Plsesion"]["id"], array('target' => '_blank')) . "</td>";
                echo "<td>" . $this->Html->link("Agregar Momento", "../Plsmomentos/add?sesion=" . $v["Plsesion"]["id"]) . "</td>";
                echo "<td>" . $this->Html->link("Plan", "edit/" . $v["Plsesion"]["id"]) . "</td>";
                echo "<td>" . $this->Html->link("Anexo", "editanexo/" . $v["Plsesion"]["id"]) . "</td>";
                echo "<td> <a id='copi' class='copi' href='javascript:getlink(" . $v["Plsesion"]["id"] . ");' >Copiar URL </a></td>  ";
            }
            ?></div>

       <thead>   
    </table>
    <p>
        <?php
        //echo $this->Paginator->counter(array(
        //'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        //));
        ?> </p>
    <div class="paging">
        <?php
        //echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        //echo $this->Paginator->numbers(array('separator' => ''));
        //echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>

<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        var filtersConfig = {
            base_path: '../js/tablefilter/',
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
            extensions: [{
                name: 'sort'
            }]
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
        var location = locationAux.replace("nuebus", "view/");

        aux.setAttribute("value", location + id);
        //alert(location);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
    }
</script>