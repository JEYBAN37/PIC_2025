<?php $this->layout = 'printactividades' ?>
<h3>Plan de Saldu Publica de Intervenciones Colectivas</h3>
<p>Plan de sesión PIC</p>


<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        <?php echo __('Acciones'); ?> <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="../../users/home"> Home</a> </li>
        <li><?php echo $this->Html->link(__('Regresar a registros'), array('controller' => 'plsesiones', 'action' => 'nuebus')); ?> </li>
        <li><?php echo $this->Html->link(__('Editar plan de sesión'), array('action' => 'edit', $plsesion['Plsesion']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Actualizar anexo'), array('action' => 'editanexo', $plsesion['Plsesion']['id'])); ?> </li>
        <li>
            <td><?php echo $this->Form->postLink(__('Borrar registro'), array('action' => 'delete', $plsesion['Plsesion']['id']), array(), __('Esta seguro/a de eliminar registro con ID# %s?', $plsesion['Plsesion']['id'])); ?>
        </li>
        <li class="divider"></li>
        <li><a href="javascript:window.print();"> Imprimir</a> </li>
        <li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>

    </ul>
</div>
<table cellpadding="0" cellspacing="0" class="table-hover table-striped table-bordered">






    <thead>
        <tr>
            <td rowspan="4" colspan="2"><img src="../../img/logoescudopasto.jpg" width="110" height="auto"></td>
        </tr>
        <tr>
            <td colspan="6">PROCESO SALUD PÚBLICA</td>
        </tr>
        <tr>
            <td colspan="6">NOMBRE DEL FORMATO: PLAN DE SESION</td>
        </tr>
        <td colspan="2">VIGENCIA: PIC_2020</td>
        <td>VERSION:02</td>
        <td colspan="1">CÓDIGO: SP-F-00X</td>
        <td colspan="1">PÁGINA:</td>


        <tr>
            <th colspan="7" style="text-align: center; "><?php echo __('Plan de sesión'); ?></th>


        </tr>

        <tr>
            <th><?php echo __('Id'); ?></th>
            <td><?php echo ($plsesion['Plsesion']['id']); ?></td>
            <th><?php echo __('Fecha'); ?></th>
            <td colspan="2"><?php echo ($plsesion['Plsesion']['fecha']); ?></td>
            <th><?php echo __('Duración'); ?></th>
            <td><?php echo ($plsesion['Plsesion']['hora_fin']); ?></td>
        </tr>



        <tr>
            <th><?php echo __('Sesion'); ?></th>
            <td colspan="3"><?php echo ($plsesion['Plsesion']['sesion']); ?></td>
            <th><?php echo __('Tema'); ?></th>
            <td colspan="2"><?php echo ($plsesion['Plsesion']['tema']); ?></td>
        </tr>

        <tr>
            <th><?php echo __('Producto relacionado'); ?></th>
            <td colspan="3"><?php echo ($plsesion['Producto']['activity']); ?></td>
            <th><?php echo __('Tarea'); ?></th>
            <td colspan="3"><?php echo ($plsesion['Producto']['resultado']); ?></td>

        </tr>
        <tr>
            <th><?php echo __('Intension'); ?></th>
            <td colspan="6"><?php echo ($plsesion['Plsesion']['intension']); ?></td>

        </tr>

        <tr>
            <th colspan="7" style="text-align: center; "><?php echo __('Premisas'); ?></th>
        </tr>
        <tr>
            <td colspan="7">
                <table border="0" width="100%">
                    <tr>
                        <td><?php echo __(' Cuerpo territorio '); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['cuerpoterritorio']); ?></td>
                        <td style="border: 1px solid #ddd;"></td>
                        <td><?php echo __(' Parte Significativa '); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['part_significativa']); ?></td>
                        <td style="border: 1px solid #ddd;"></td>
                        <td><?php echo __(' Ciudadania activa '); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['ciudadaniaactiva']); ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <th colspan="7" style="text-align: center; "><?php echo __('Enfoques'); ?></th>
        </tr>
        <tr>
            <td colspan="7">
                <table border="0" width="100%">
                    <tr>
                        <td><?php echo __('Territorial'); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['territorial']); ?>
                        <td style="border: 1px solid #ddd;"></td>
                        <td><?php echo __('Poblacional'); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['poblacional']); ?>
                        <td style="border: 1px solid #ddd;"></td>
                        <td><?php echo __('Interultural'); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['interultural']); ?>
                        <td style="border: 1px solid #ddd;"></td>
                        <td><?php echo __('Diferencial'); ?></td>
                        <td colspan="2"> <?php echo ($plsesion['Plsesion']['diferencial']); ?>
                        <td style="border: 1px solid #ddd;"></td>
                        <td><?php echo __('Genero'); ?></td>
                        <td colspan="2"> <?php echo ($plsesion['Plsesion']['genero']); ?>

                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <th colspan="7" style="text-align: center; "><?php echo __('Objetivos de la estrategia'); ?></th>
        </tr>
        <tr>
            <td colspan="7">
                <table border="0" width="100%">
                    <tr>
                        <td><?php echo __('Objetivo uno(Ser)'); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['obj_individuos']); ?>
                        <td style="border: 1px solid #ddd;"></td>
                        <td><?php echo __('Objetivo dos(fortalecimiento)'); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['obj_organizaciones']); ?>
                        <td style="border: 1px solid #ddd;"></td>
                        <td><?php echo __('Objetivo tres (Articulación)'); ?></td>
                        <td colspan="2"><?php echo ($plsesion['Plsesion']['obj_instituciones']); ?>
                    </tr>
                </table>
            </td>
        </tr>




        <tr>
            <th colspan="2"><?php echo __('Objetivo general '); ?></th>
            <td colspan="6"><?php echo ($plsesion['Plsesion']['objetivog']); ?>
                &nbsp;
            </td>

        </tr>

        <tr>
            <th colspan="2"><?php echo __('Objetivo especificos'); ?></th>
            <td colspan="6"> <?php echo ($plsesion['Plsesion']['objetivoe']); ?>
                &nbsp;
            </td>

        </tr>


        <tr>
            <th>Tipo de población</th>
            <td><?php echo ($plsesion['Plsesion']['tipoblacion']); ?>
            </td>
            <th>Proceso</th>
            <td colspan="2"><?php echo ($plsesion['Plsesion']['proceso']); ?></td>

            <th>Dimensión</th>
            <td><?php echo ($plsesion['Plsesion']['dimension']); ?>
            </td>

        </tr>
        <tr>

            <th><?php echo __('Responsable'); ?></th>
            <td colspan="6"><?php echo $this->Html->link($plsesion['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $plsesion['Responsable']['id'])); ?>
                &nbsp;
            </td>
        </tr>

        <tr>
            <th colspan="7" style="text-align: center; "><?php echo __('Preguntas de sentido'); ?></th>
        </tr>

        <tr>
            <td colspan="7"><?php echo ($plsesion['Plsesion']['preguntasentido']); ?>
                &nbsp;
            </td>
        </tr>

        <tr>
            <td colspan="7" style="width:100%;">

                <table>
                    <tr>
                        <td> <?php echo __('Califi Objetivo uno(Ser)'); ?></td>
                        <td><?php echo ($plsesion['Plsesion']['califi_obj1']); ?>
                        <td style="border: 1px solid #ddd;"></td>
                        &nbsp;
            </td>
            <td><?php echo __('Califi Objetivo dos(fortalecimiento)'); ?></td>
            <td><?php echo ($plsesion['Plsesion']['califi_obj2']); ?>
            <td style="border: 1px solid #ddd;"></td>
            &nbsp;
            </td>
            <td><?php echo __('Califi Objetivo tres (Articulación)'); ?></td>
            <td><?php echo ($plsesion['Plsesion']['califi_obj3']); ?>
                &nbsp;
            </td>
        </tr>
</table>

</td>

</tr>

<tr>
    <td colspan="7" style="width:100%;">
        <table>
            <td><?php echo __('Califi Premisa Cuerpo territorio'); ?></td>
            <td> <?php echo ($plsesion['Plsesion']['califi_premisa_ct']); ?>
            <td style="border: 1px solid #ddd;"></td> &nbsp;
    </td>
    <td><?php echo __('Califi Premisa Participación significativa'); ?></td>
    <td><?php echo ($plsesion['Plsesion']['califi_premisa_ps']); ?>
    <td style="border: 1px solid #ddd;"></td> &nbsp;
    </td>

    <td><?php echo __('Califi Premisa Ciudadania activa'); ?></td>
    <td><?php echo ($plsesion['Plsesion']['califi_premisa_ca']); ?>
    <td style="border: 1px solid #ddd;"></td> &nbsp;
    </td>
    </table>
    </td>
</tr>

<tr>

    <td colspan="7" style="width:100%;">
        <table>
            <td><?php echo __('Califi Enfo Territorial'); ?></td>
            <td><?php echo ($plsesion['Plsesion']['califi_enfo_territorial']); ?>
            <td style="border: 1px solid #ddd;"></td>&nbsp;
    </td>
    <td><?php echo __('Califi Enfo Poblacional'); ?></td>
    <td><?php echo ($plsesion['Plsesion']['califi_enfo_poblacional']); ?>
    <td style="border: 1px solid #ddd;"></td>&nbsp;
    </td>
    <td><?php echo __('Califi Enfo Intercultural'); ?></td>
    <td><?php echo ($plsesion['Plsesion']['califi_enfo_intercultural']); ?>
    <td style="border: 1px solid #ddd;"></td>&nbsp;
    </td>
    <td><?php echo __('Califi Enfo Diferencial'); ?></td>
    <td colspan="2"><?php echo ($plsesion['Plsesion']['califi_enfo_diferencial']); ?>
    <td style="border: 1px solid #ddd;"></td> &nbsp;
    </td>
    </table>
    </td>
</tr>

<tr>
    <td colspan="7" style="width:100%;">
        <table>
            <tr>
                <td><?php echo __('Anexo:'); ?></td>
                <td colspan="2"><?php echo $this->Html->link('../files/plsesion/anexo/' . $plsesion['Plsesion']['dirplanes'] . '/' . $plsesion['Plsesion']['anexo']); ?> </td>
                <td style="border: 1px solid #ddd;"></td>
                <td><?php echo __('Enlaceurl'); ?></td>
                <td colspan="2">
                    <?php echo ($plsesion['Plsesion']['enlaceurl']); ?>
                    &nbsp;</td><td style="border: 1px solid #ddd;"></td>
                <td><?php echo __('Elaborado'); ?></td>
                <td colspan="2"><?php echo ($plsesion['Plsesion']['created']); ?>
                    &nbsp;</td><td style="border: 1px solid #ddd;"></td>
                <td><?php echo __('Elaborado'); ?></td>
                <td colspan="2"><?php echo ($plsesion['Plsesion']['modified']); ?>
                    &nbsp;</td>

            </tr>

        </table>
    </td>
</tr>

</thead>

</table>


<div class="related">
    <h3><?php echo __('Momentos'); ?></h3>
    <?php if (!empty($plsesion['Plsmomento'])) : ?>
        <table cellpadding="0" cellspacing="0" class="table-hover table-striped table-bordered">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <!--		<th><?php //echo __('Plsesion Id'); 
                                ?></th>-->
                <th><?php echo __('Momento'); ?></th>
                <th><?php echo __('Duracion'); ?></th>
                <th><?php echo __('Metodologia'); ?></th>
                <th><?php echo __('Resultado'); ?></th>
                <th><?php echo __('Insumos'); ?></th>
                <th class="actions"><?php echo __('Edición'); ?></th>
            </tr>
            <?php foreach ($plsesion['Plsmomento'] as $plsmomento) : ?>
                <tr>
                    <td><?php echo $plsmomento['id']; ?></td>
                    <!--			<td><?php //echo $plsmomento['plsesion_id']; 
                                        ?></td>-->
                    <td><?php echo $plsmomento['momento']; ?></td>
                    <td><?php echo $plsmomento['duracion']; ?></td>
                    <td><?php echo $plsmomento['metodologia']; ?></td>
                    <td><?php echo $plsmomento['resultado']; ?></td>
                    <td><?php echo $plsmomento['insumo']; ?></td>
                    <td class="actions">
                        <?php //echo $this->Html->link(__('View'), array('controller' => 'plsmomentos', 'action' => 'view', $plsmomento['id'])); 
                        ?>
                        <?php echo $this->Html->link(__('Editar'), array('controller' => 'plsmomentos', 'action' => 'edit', $plsmomento['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plsmomentos', 'action' => 'delete', $plsmomento['id']), array(), __('Esta seguro de eliminar el momento con id # %s?', $plsmomento['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <!--	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Plsmomento'), array('controller' => 'plsmomentos', 'action' => 'add')); 
                ?> </li>
		</ul>
	</div>-->
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('textarea').each(function() {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

    });
</script>