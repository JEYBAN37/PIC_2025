
<div class="ubicaciones view">
<h2><?php echo __('Ubicacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['zona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo1'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['tipo1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['comuna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo2'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['tipo2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['barrio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estrato'); ?></dt>
		<dd>
			<?php echo h($ubicacion['Ubicacion']['estrato']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ubicacion'), array('action' => 'edit', $ubicacion['Ubicacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ubicacion'), array('action' => 'delete', $ubicacion['Ubicacion']['id']), array(), __('Are you sure you want to delete # %s?', $ubicacion['Ubicacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actividades'); ?></h3>
	<?php if (!empty($ubicacion['Actividad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fechainicio'); ?></th>
		<th><?php echo __('Fechafinal'); ?></th>
		<th><?php echo __('Tema'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		
		<th><?php echo __('Poblacion Id'); ?></th>
		
		
		<th><?php echo __('Tipoactividad'); ?></th>
		<th><?php echo __('Objetivo'); ?></th>
		<th><?php echo __('Objetivoestrategia Id'); ?></th>
		<th><?php echo __('Archivodigital'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th><?php echo __('Registro'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ubicacion['Actividad'] as $actividad): ?>
		<tr>
			<td><?php echo $actividad['id']; ?></td>
			
                        <td><?php echo $actividad['hora_inicio']; ?></td>
			<td><?php echo $actividad['hora_fin']; ?></td>
			<td><?php echo $actividad['tema']; ?></td>
			<td><?php echo $actividad['ubicacion_id']; ?></td>
			
			
			<td><?php echo $actividad['poblacion_id']; ?></td>
			
			
			<td><?php echo $actividad['tipoactividad']; ?></td>
			<td><?php echo $actividad['objetivo']; ?></td>
			<td><?php echo $actividad['objetivoestrategia_id']; ?></td>
			<td><?php echo $actividad['archivodigital']; ?></td>
			<td><?php echo $actividad['entidad_id']; ?></td>
			<td><?php echo $actividad['registro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actividades', 'action' => 'view', $actividad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actividades', 'action' => 'edit', $actividad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actividades', 'action' => 'delete', $actividad['id']), array(), __('Are you sure you want to delete # %s?', $actividad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($ubicacion['Persona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipoidentificacion'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Fechanac'); ?></th>
		<th><?php echo __('Genero Id'); ?></th>
		<th><?php echo __('Grupo'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Nombrecontacto'); ?></th>
		<th><?php echo __('Parentesco'); ?></th>
		<th><?php echo __('Teefonolacudiente'); ?></th>
		<th><?php echo __('Perteneceorganizacion'); ?></th>
		<th><?php echo __('Preferencia Id'); ?></th>
		<th><?php echo __('Etnia Id'); ?></th>
		<th><?php echo __('Victima Id'); ?></th>
		<th><?php echo __('Estudio Id'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Tiempoexperiencia'); ?></th>
		<th><?php echo __('Regimen'); ?></th>
		<th><?php echo __('Aseguradora Id'); ?></th>
		<th><?php echo __('Discapacidad Id'); ?></th>
		<th><?php echo __('Actividad Id'); ?></th>
		<th><?php echo __('Fecharegistro'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ubicacion['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id']; ?></td>
			<td><?php echo $persona['tipoidentificacion']; ?></td>
			<td><?php echo $persona['identificacion']; ?></td>
			<td><?php echo $persona['nombres']; ?></td>
			<td><?php echo $persona['apellidos']; ?></td>
			<td><?php echo $persona['fechanac']; ?></td>
			<td><?php echo $persona['genero_id']; ?></td>
			<td><?php echo $persona['grupo']; ?></td>
			<td><?php echo $persona['ubicacion_id']; ?></td>
			<td><?php echo $persona['celular']; ?></td>
			<td><?php echo $persona['telefono']; ?></td>
			<td><?php echo $persona['correo']; ?></td>
			<td><?php echo $persona['profesion_id']; ?></td>
			<td><?php echo $persona['cargo']; ?></td>
			<td><?php echo $persona['equipo_id']; ?></td>
			<td><?php echo $persona['nombrecontacto']; ?></td>
			<td><?php echo $persona['parentesco']; ?></td>
			<td><?php echo $persona['teefonolacudiente']; ?></td>
			<td><?php echo $persona['perteneceorganizacion']; ?></td>
			<td><?php echo $persona['preferencia_id']; ?></td>
			<td><?php echo $persona['etnia_id']; ?></td>
			<td><?php echo $persona['victima_id']; ?></td>
			<td><?php echo $persona['estudio_id']; ?></td>
			<td><?php echo $persona['ocupacion']; ?></td>
			<td><?php echo $persona['tiempoexperiencia']; ?></td>
			<td><?php echo $persona['regimen']; ?></td>
			<td><?php echo $persona['aseguradora_id']; ?></td>
			<td><?php echo $persona['discapacidad_id']; ?></td>
			<td><?php echo $persona['actividad_id']; ?></td>
			<td><?php echo $persona['fecharegistro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personas', 'action' => 'view', $persona['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personas', 'action' => 'edit', $persona['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personas', 'action' => 'delete', $persona['id']), array(), __('Are you sure you want to delete # %s?', $persona['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Proyectos'); ?></h3>
	<?php if (!empty($ubicacion['Proyecto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th><?php echo __('Nombreproyecto'); ?></th>
		<th><?php echo __('Objetivo'); ?></th>
		<th><?php echo __('Poblacion Id'); ?></th>
		<th><?php echo __('Vigencia'); ?></th>
		<th><?php echo __('Duracion'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ubicacion['Proyecto'] as $proyecto): ?>
		<tr>
			<td><?php echo $proyecto['id']; ?></td>
			<td><?php echo $proyecto['entidad_id']; ?></td>
			<td><?php echo $proyecto['nombreproyecto']; ?></td>
			<td><?php echo $proyecto['objetivo']; ?></td>
			<td><?php echo $proyecto['poblacion_id']; ?></td>
			<td><?php echo $proyecto['vigencia']; ?></td>
			<td><?php echo $proyecto['duracion']; ?></td>
			<td><?php echo $proyecto['ubicacion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proyectos', 'action' => 'view', $proyecto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proyectos', 'action' => 'edit', $proyecto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proyectos', 'action' => 'delete', $proyecto['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
