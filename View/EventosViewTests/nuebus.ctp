



<?php $this->layout = 'tablas' ?>
<?php echo $this->Html->script('tablefilter/tablefilter'); ?>



<br/>


<div >

	<?php
    echo $this->Form->create("EventosViewTest", array("action" => "nuebus"));
    //echo $this->Form->input("Busqueda", array("Label" => "Actividad a buscar"));
    //echo "Buscar por: " . $this->Form->select("Campo", $Campos, array("empty" => false));
    //<echo "Recuerde que puede realizar una consulta por cualquiera de las columnas mostradas";
    //echo $this->Form->end("Consultar");
    ?>




<table cellpadding="0" cellspacing="0" id="list" class="table table-bordered table-hover">
        <tr>
            <?php
            if (empty($l)) {
                echo "Sin resultados";
            } else {
                foreach ($l[0]["EventosViewTest"] as $i => $v) {
                    echo "<th>" . $i . "</th>";
                }
            }
            echo "<th>Ver</th>";
            echo "<th>Copiar Url</th>";
            echo "<th>Edición </th>";
            echo "<th>Anexo</th>";
            ?>
        </tr>

        <div class="actions">

            <?php
            foreach ($l as $i => $v) {
                echo "<tr>";
                foreach ($v["EventosViewTest"] as $j => $w) {
                    echo "<td>" . $w . "</td>";
                }

                   echo "<td>" .$this->Html->link($this->html->image('icon_view.png', array('border' => 0, 'height' => 20, 'title' => 'Ver informe')), "../Infoeventos/view/".$v["EventosViewTest"]["id"], array('escape' => false)). "</td>";

                     echo "<td> <a id='copi' class='copi' href='javascript:getlink(" . $v["EventosViewTest"]["id"] . ");' > <img src='../img/copylink.png' /> </a></td>  " ;
                
                echo "<td>" .$this->Html->link($this->html->image('editar.png', array('border' => 0, 'height' => 25, 'title' => '
                    editar informe')), "../Infoeventos/edit/".$v["EventosViewTest"]["id"], array('escape' => false)). "</td>";

                 
             
                echo "<td>" .$this->Html->link($this->html->image('rar.png', array('border' => 0, 'height' => 20, 'title' => 'Editar soporte')), "../Infoeventos/editanexo/".$v["EventosViewTest"]["id"], array('escape' => false)). "</td>";            

                /*echo "<td>" . $this->Html->link("Ver", "../Infoeventos/view/" . $v["EventosViewTest"]["id"], array('target' => '_blank')) . "</td>";
                echo "<td> <a id='copi' class='copi' href='javascript:getlink(" . $v["EventosViewTest"]["id"] . ");' >Copiar URL </a></td>  " ;
                echo "<td>" . $this->Html->link("Editar", "../Infoeventos/edit/" . $v["EventosViewTest"]["id"]) . "</td>";
                echo "<td>" . $this->Html->link("Anexo", "../Infoeventos/index/" . $v["EventosViewTest"]["id"]) . "</td>";*/

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
            col_3: 'select',
            col_4: 'select',
            col_5: 'select',
            col_8: 'none',
            col_9: 'none',
            col_10: 'none',
            col_11: 'none',

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
var location = locationAux.replace("eventosviewtests/nuebus","Infoeventos/view/");

aux.setAttribute("value",location + id);
alert("Cópiado en portapapeles: " + location + id );
//alert(location);
document.body.appendChild(aux);
aux.select();
document.execCommand("copy");
document.body.removeChild(aux);
}



</script>