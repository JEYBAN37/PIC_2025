<?php $this->layout = 'print_act' ?>


<div class="actividades view" >

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td rowspan="2"><?php echo __('Fecha'); ?></td>
            <td colspan="3">FECHA</td>

            <td>HORA INICIO</td>
            <td>HORA FINAL</td>
            <td>ACTIVIDAD Nº</td>
        </tr>
        <tr>
            <td colspan="3"><?php echo h($actividad['Actividad']['fecha']); ?></td>
            <td><?php echo h($actividad['Actividad']['hora_inicio']); ?></td>
            <td><?php echo h($actividad['Actividad']['hora_fin']); ?></td>
            <td><?php echo h($actividad['Actividad']['id']); ?></td>
        </tr>
        <tr>
            <td><?php echo __('Dimensión:'); ?></td>
            <td colspan="3"><?php echo h($actividad['Producto']['dimensiones']); ?></td>
            <td colspan="3"><?php echo h($actividad['Actividad']['producto1']); ?></td>
        </tr>  
        <tr>
            <td><?php echo __('Tema:'); ?></td>
            <td colspan="6"><?php echo h($actividad['Actividad']['tema']); ?></td>
        </tr>
        <tr>
            <td><?php echo __('Grupo participante:'); ?></td>
            <td colspan="6"><?php echo h($actividad['Actividad']['nombregrupo']); ?></td>
        </tr>
        <tr>
            <td><?php echo __('Objetivo:'); ?></td>
            <td colspan="6"><?php echo h($actividad['Actividad']['objactividad']); ?></td>
        </tr>
        <tr>
            <td><?php echo __('Objetivo especificos:'); ?></td>
            <td colspan="6"><?php echo h($actividad['Actividad']['objetivoespecifico']); ?></td>
        </tr>
       
        <tr> <td><?php echo __('Caracteristica de sesión:') ?></td>
            <td colspan="3"><?php echo h($actividad['Actividad']['caracteristicasesion']); ?></td><td><?php echo __('Otro tipo:'); ?></td>
            <td colspan="2"><?php echo h($actividad['Actividad']['otrocual']); ?></td>
        </tr>
        <tr>
            <td>Lugar</td>
            <td colspan="3"><?php echo h($actividad['Ubicacion']['barrio']); ?></td>
            <td colspan="3"><?php echo h($actividad['Ubicacion']['comuna']); ?></td>
          
            
        </tr>
        <tr>
            <td colspan="8">POBLACIONES PARTICIPANTES</td>
        </tr>
        <tr>
            <td colspan="8"><?php echo ($actividad['Actividad']['poblaciones']) ?></td>                      
        </tr>
        <tr> <td colspan="8"> <?php echo __('RELACION CON LOS OBJETIVOS DE LA ESTRATEGIA') ?></td></tr>
        <tr> <td><?php echo __('Individual') ?></td>
            <td ><?php echo h($actividad['Actividad']['objetivouno']); ?></td><td><?php echo __('Comunitario'); ?></td>
            <td colspan="2"><?php echo h($actividad['Actividad']['objetivodos']); ?></td><td><?php echo __('Institucional'); ?></td>
            <td colspan="2"><?php echo h($actividad['Actividad']['objetivotres']); ?></td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td colspan="8">CONTRIBUCIÓN A LOS OBJETIVOS</td>                                     
        </tr>
        <tr> 
            <td>
                <?php
                $auxContObj = strrpos(h($actividad['Actividad']['contobjetivo']), '/');
                if ($auxContObj === false) {
                    ?>
                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo h($actividad['Actividad']['contobjetivo']); ?></textarea>
                    <?php
                } else {
                    print ($actividad['Actividad']['contobjetivo']);
                }
                ?>                 
            </td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr> <td colspan="8"> <?php echo __('RELACIÓN CON LAS PREMISAS') ?></td></tr>
        <tr> <td><?php echo __('Participación significativa') ?></td>
            <td ><?php echo h($actividad['Actividad']['premisauno']); ?></td><td><?php echo __('Cuerpo territorio'); ?></td>
            <td ><?php echo h($actividad['Actividad']['premisados']); ?></td><td><?php echo __('Ciudadanía Activa'); ?></td>
            <td ><?php echo h($actividad['Actividad']['premisatres']); ?></td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td colspan="8">CONTRIBUCIÓN A LAS PREMISAS</td>                                     
        </tr>
        <tr> 
            <td >
                <?php
                $auxContPrem = strrpos(h($actividad['Actividad']['contpremisa']), '/');
                if ($auxContPrem === false) {
                    ?>
                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo h($actividad['Actividad']['contpremisa']); ?></textarea>
                    <?php
                } else {
                    print ($actividad['Actividad']['contpremisa']);
                }
                ?>
            </td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr> <td colspan="8"> <?php echo __('RELACIÓN CON LAS PERSPECTIVAS') ?></td></tr>
        <tr> <td><?php echo __('Derechos') ?></td>
            <td ><?php echo h($actividad['Actividad']['perspectivados']); ?></td><td><?php echo __('Determinación social'); ?></td>
            <td ><?php echo h($actividad['Actividad']['perspectivauno']); ?></td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td colspan="8">CONTRIBUCIÓN A LAS PERSPECTIVAS</td>                                     
        </tr>
        <tr> 
            <td >
                <?php
                $auxContPers = strrpos(h($actividad['Actividad']['contperspectiva']), '/');
                if ($auxContPers === false) {
                    ?>
                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo h($actividad['Actividad']['contperspectiva']); ?></textarea>
                    <?php
                } else {
                    print ($actividad['Actividad']['contperspectiva']);
                }
                ?>
            </td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr> <td colspan="8"> <?php echo __('RELACIÓN CON LOS ENFOQUES') ?></td></tr>
        <tr> <td><?php echo __('Poblacional') ?></td>
            <td ><?php echo h($actividad['Actividad']['enfoqueuno']); ?></td><td><?php echo __('Territorial'); ?></td>
            <td ><?php echo h($actividad['Actividad']['enfoquedos']); ?></td></td><td><?php echo __('Intercultural'); ?></td>
            <td ><?php echo h($actividad['Actividad']['enfoquetres']); ?></td></td><td><?php echo __('Diferencial'); ?></td>
            <td ><?php echo h($actividad['Actividad']['enfoquecuatro']); ?></td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td colspan="8">CONTRIBUCIÓN CON LOS ENFOQUES</td>                                     
        </tr>
        <tr> 
            <td >
                <?php
                $auxContEnf = strrpos(h($actividad['Actividad']['contribucionenfoque']), '/');
                if ($auxContEnf === false) {
                    ?>
                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo h($actividad['Actividad']['contribucionenfoque']); ?></textarea>
                    <?php
                } else {
                    print ($actividad['Actividad']['contribucionenfoque']);
                }
                ?>
            </td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td colspan="8">COMPROMISOS GENERADOS</td>                                     
        </tr>
        <tr> 
            <td >
                <?php
                $auxComp = strrpos(h($actividad['Actividad']['compromiso']), '/');
                if ($auxComp === false) {
                    ?>
                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo h($actividad['Actividad']['compromiso']); ?></textarea>
                    <?php
                } else {
                    print ($actividad['Actividad']['compromiso']);
                }
                ?>
            </td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td colspan="8">APORTES DE LA COMUNIDAD</td>                                     
        </tr>
        <tr> 
            <td >
                <?php
                $auxApor = strrpos(h($actividad['Actividad']['aportes']), '/');
                if ($auxApor === false) {
                    ?>
                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo h($actividad['Actividad']['aportes']); ?></textarea>
                    <?php
                } else {
                    print ($actividad['Actividad']['aportes']);
                }
                ?>
            </td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td colspan="8">CONCLUSIONES</td>                                     
        </tr>
        <tr> 
            <td >
                <?php
                $auxConcl = strrpos(h($actividad['Actividad']['conclusiones']), '/');
                if ($auxConcl === false) {
                    ?>
                    <textarea readonly id="" style="margin: 0px; width: 980px; height: 100px;"><?php echo h($actividad['Actividad']['conclusiones']); ?></textarea>
                    <?php
                } else {
                    print ($actividad['Actividad']['conclusiones']);
                }
                ?>
            </td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr> <td colspan="8"> <?php echo __('APOYO EXTERNO') ?></td></tr>
        <tr> <td><?php echo __('Apoyo') ?></td>
            <td ><?php echo h($actividad['Actividad']['externo']); ?></td><td><?php echo __('cargo'); ?></td>
            <td ><?php echo h($actividad['Actividad']['cargo']); ?></td></td><td><?php echo __('Org/Inst'); ?></td>
            <td ><?php echo h($actividad['Actividad']['organizacion']); ?></td>
        </tr>
    </table>

    <table class="table-hover table-striped table-bordered">
        <tr>
            <td><?php echo __('Anexo actividad'); ?></td>
            <td colspan="6"><?php echo $this->Html->link('../files/actividad/anexo/' . $actividad['Actividad']['actividad_dir'] . '/' . $actividad['Actividad']['anexo']); ?> </td>


        </tr>
        
         <tr>
            <td><?php echo __('Plan se sesión'); ?></td>
            <td colspan="6">
               
               <?php echo $this->Html->link($actividad['Actividad']['plan']); ?></td>
            

        </tr>

        <tr>
            <td><?php echo __('RESPONSABLE DE SISTEMATIZACION'); ?></td>
            <td  colspan="3"><?php echo h($actividad['Responsable']['nombres']); ?>  </td>
            <td  colspan="3"><?php echo h($actividad['Responsable']['profesion']); ?>  </td>
        </tr>

        <tr>
            
            <td colspan="2">Dimensión:<?php echo h($actividad['Producto']['dimensiones']); ?></td>
            <td colspan="2">Producto:<?php echo h($actividad['Producto']['activity']); ?></td>
            <td >Entorno:<?php echo h($actividad['Producto']['entorno']); ?></td>


        </tr>
        <tr>
             <td colspan="8">Tarea:<?php echo h($actividad['Producto']['tarea']); ?></td >
        </tr> 


    </table>
    
    <table class="table-hover table-striped table-bordered">
        <tr>
            <td ><?php echo __('Fecha_ingreso: '); ?><?php echo h($actividad['Actividad']['fecharegistro']); ?></td >
            <td ><?php echo __('Fecha_actualización: '); ?><?php echo h($actividad['Actividad']['actualizado']); ?></td >
        </tr>
    </table>

</div>  

<div class="related">
		<?php if (!empty($actividad['CantidadPersonasPicViewTest'])): ?>


	<table class="table-hover table-striped table-bordered">
        <tr>
            <td ><?php echo __('ID actividad: '); ?></td >
            <td ><?php echo __('Numero de participantes asociados'); ?></td >
        </tr>
	
	
	<?php foreach ($actividad['CantidadPersonasPicViewTest'] as $cantidadPersonasPicViewTest): ?>
		<tr>
			<td><?php echo $cantidadPersonasPicViewTest['actividad_id']; ?></td>
			<td><?php echo $cantidadPersonasPicViewTest['cantidad_personas']; ?></td>
					
			
		
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>  

	

<div class="related">

	
	<?php if (!empty($actividad['Persona'])): ?>
	<table class="table-hover table-striped table-bordered">
	<tr ><td colspan="18"><h4><?php echo __('Participantes asociados'); ?>  <?php echo $this->Html->link(__(' Ir a modulo participantes'), array('controller' => 'personas', 'action' => 'add')); ?>  
            </h4></td></tr>
	<tr>
		<th><?php echo __('Id'); ?></th>
		
		<th><?php echo __('Tipoidoc'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Fechanac'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Genero'); ?></th>
			
		<th><?php echo __('Poblaciones'); ?></th>
		<th><?php echo __('Discapacidad'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>		
		<th><?php echo __('Vereda'); ?></th>
		
		
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Regimen'); ?></th>
			
		<th><?php echo __('Fecharegistro'); ?></th>
	
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividad['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id']; ?></td>
			
			<td><?php echo $persona['tipoidoc']; ?></td>
			<td><?php echo $persona['identificacion']; ?></td>
			<td><?php echo $persona['nombres']; ?></td>
			<td><?php echo $persona['apellidos']; ?></td>
			<td><?php echo $persona['fechanac']; ?></td>
			<td><?php echo $persona['edad']; ?></td>
			<td><?php echo $persona['genero']; ?></td>
			
			<td><?php echo $persona['poblaciones']; ?></td>
			<td><?php echo $persona['discapacidad']; ?></td>
			<td><?php echo $persona['ubicacion_id']; ?></td>			
			<td><?php echo $persona['vereda']; ?></td>			
			
			<td><?php echo $persona['celular']; ?></td>
			<td><?php echo $persona['regimen']; ?></td>
			
			
			<td><?php echo $persona['fecharegistro']; ?></td>


			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'personas', 'action' => 'view', $persona['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'personas', 'action' => 'edit', $persona['id'])); ?>
				<!--?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personas', 'action' => 'delete', $persona['id']), array(), __('Esta seguro de borrar # %s?', $persona['id'])); ?-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>





<?php
/*$this->Html->css([
//    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
//        ], ['block' => 'css']
//);
//$this->Html->script([
    'https://code.jquery.com/jquery-3.2.1.min.js',
    'https://cdn.ckeditor.com/4.9.2/basic/ckeditor.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);*/
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('textarea').each(function () {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
        }).on('input', function () {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

    });
</script>
