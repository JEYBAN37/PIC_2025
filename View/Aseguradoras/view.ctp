<div class="aseguradoras view">
<h2><?php echo __('Aseguradora'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aseguradora['Aseguradora']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aseguradora'); ?></dt>
		<dd>
			<?php echo h($aseguradora['Aseguradora']['aseguradora']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aseguradora'), array('action' => 'edit', $aseguradora['Aseguradora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aseguradora'), array('action' => 'delete', $aseguradora['Aseguradora']['id']), array(), __('Are you sure you want to delete # %s?', $aseguradora['Aseguradora']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aseguradoras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aseguradora'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Smseventos'), array('controller' => 'smseventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Smsevento'), array('controller' => 'smseventos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($aseguradora['Persona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Tipoidoc'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Fechanac'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Grupo'); ?></th>
		<th><?php echo __('Genero Id'); ?></th>
		<th><?php echo __('Otrogenero'); ?></th>
		<th><?php echo __('Preferencia Id'); ?></th>
		<th><?php echo __('Etnia Id'); ?></th>
		<th><?php echo __('Estudio Id'); ?></th>
		<th><?php echo __('Otroestudio'); ?></th>
		<th><?php echo __('Profesion'); ?></th>
		<th><?php echo __('Poblacion'); ?></th>
		<th><?php echo __('Poblacion Id'); ?></th>
		<th><?php echo __('Discapacidad'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Vereda'); ?></th>
		<th><?php echo __('Comuna'); ?></th>
		<th><?php echo __('Corregimiento'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Tiempoexperiencia'); ?></th>
		<th><?php echo __('Aseguradora Id'); ?></th>
		<th><?php echo __('Regimen'); ?></th>
		<th><?php echo __('Perteneceorganizacion'); ?></th>
		<th><?php echo __('Organizacion'); ?></th>
		<th><?php echo __('Sociedad Id'); ?></th>
		<th><?php echo __('Sector Id'); ?></th>
		<th><?php echo __('Nombrecontacto'); ?></th>
		<th><?php echo __('Parentesco'); ?></th>
		<th><?php echo __('Teefonolacudiente'); ?></th>
		<th><?php echo __('Actividad Id'); ?></th>
		<th><?php echo __('Fecharegistro'); ?></th>
		<th><?php echo __('Equipo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aseguradora['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id']; ?></td>
			<td><?php echo $persona['fecha']; ?></td>
			<td><?php echo $persona['tipoidoc']; ?></td>
			<td><?php echo $persona['identificacion']; ?></td>
			<td><?php echo $persona['nombres']; ?></td>
			<td><?php echo $persona['apellidos']; ?></td>
			<td><?php echo $persona['fechanac']; ?></td>
			<td><?php echo $persona['edad']; ?></td>
			<td><?php echo $persona['grupo']; ?></td>
			<td><?php echo $persona['genero_id']; ?></td>
			<td><?php echo $persona['otrogenero']; ?></td>
			<td><?php echo $persona['preferencia_id']; ?></td>
			<td><?php echo $persona['etnia_id']; ?></td>
			<td><?php echo $persona['estudio_id']; ?></td>
			<td><?php echo $persona['otroestudio']; ?></td>
			<td><?php echo $persona['profesion']; ?></td>
			<td><?php echo $persona['poblacion']; ?></td>
			<td><?php echo $persona['poblacion_id']; ?></td>
			<td><?php echo $persona['discapacidad']; ?></td>
			<td><?php echo $persona['ubicacion_id']; ?></td>
			<td><?php echo $persona['vereda']; ?></td>
			<td><?php echo $persona['comuna']; ?></td>
			<td><?php echo $persona['corregimiento']; ?></td>
			<td><?php echo $persona['direccion']; ?></td>
			<td><?php echo $persona['celular']; ?></td>
			<td><?php echo $persona['telefono']; ?></td>
			<td><?php echo $persona['correo']; ?></td>
			<td><?php echo $persona['ocupacion']; ?></td>
			<td><?php echo $persona['cargo']; ?></td>
			<td><?php echo $persona['tiempoexperiencia']; ?></td>
			<td><?php echo $persona['aseguradora_id']; ?></td>
			<td><?php echo $persona['regimen']; ?></td>
			<td><?php echo $persona['perteneceorganizacion']; ?></td>
			<td><?php echo $persona['organizacion']; ?></td>
			<td><?php echo $persona['sociedad_id']; ?></td>
			<td><?php echo $persona['sector_id']; ?></td>
			<td><?php echo $persona['nombrecontacto']; ?></td>
			<td><?php echo $persona['parentesco']; ?></td>
			<td><?php echo $persona['teefonolacudiente']; ?></td>
			<td><?php echo $persona['actividad_id']; ?></td>
			<td><?php echo $persona['fecharegistro']; ?></td>
			<td><?php echo $persona['equipo']; ?></td>
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
	<h3><?php echo __('Related Smseventos'); ?></h3>
	<?php if (!empty($aseguradora['Smsevento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fuenteevento Id'); ?></th>
		<th><?php echo __('Dimension Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Ubicaciones Id'); ?></th>
		<th><?php echo __('Fechareporte'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Fechanac'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Regimen'); ?></th>
		<th><?php echo __('Aseguradora Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aseguradora['Smsevento'] as $smsevento): ?>
		<tr>
			<td><?php echo $smsevento['id']; ?></td>
			<td><?php echo $smsevento['fuenteevento_id']; ?></td>
			<td><?php echo $smsevento['dimension_id']; ?></td>
			<td><?php echo $smsevento['evento_id']; ?></td>
			<td><?php echo $smsevento['ubicaciones_id']; ?></td>
			<td><?php echo $smsevento['fechareporte']; ?></td>
			<td><?php echo $smsevento['entidad_id']; ?></td>
			<td><?php echo $smsevento['identificacion']; ?></td>
			<td><?php echo $smsevento['nombres']; ?></td>
			<td><?php echo $smsevento['apellidos']; ?></td>
			<td><?php echo $smsevento['fechanac']; ?></td>
			<td><?php echo $smsevento['edad']; ?></td>
			<td><?php echo $smsevento['regimen']; ?></td>
			<td><?php echo $smsevento['aseguradora_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'smseventos', 'action' => 'view', $smsevento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'smseventos', 'action' => 'edit', $smsevento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'smseventos', 'action' => 'delete', $smsevento['id']), array(), __('Are you sure you want to delete # %s?', $smsevento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Smsevento'), array('controller' => 'smseventos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
