<div class="proyectos view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Entidad']['id'], array('controller' => 'entidades', 'action' => 'view', $proyecto['Entidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombreproyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['nombreproyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['objetivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poblacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Poblacion']['poblacion'], array('controller' => 'poblaciones', 'action' => 'view', $proyecto['Poblacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vigencia'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['vigencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duracion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['duracion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proyecto['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $proyecto['Ubicacion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['id']), array(), __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poblacion'), array('controller' => 'poblaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Entidades'); ?></h3>
	<?php if (!empty($proyecto['Entidad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Entidad'] as $entidad): ?>
		<tr>
			<td><?php echo $entidad['id']; ?></td>
			<td><?php echo $entidad['entidad_id']; ?></td>
			<td><?php echo $entidad['proyecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'entidades', 'action' => 'view', $entidad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'entidades', 'action' => 'edit', $entidad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entidades', 'action' => 'delete', $entidad['id']), array(), __('Are you sure you want to delete # %s?', $entidad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entidad'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Organizaciones'); ?></h3>
	<?php if (!empty($proyecto['Organizacion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Nombreorg'); ?></th>
		<th><?php echo __('Representante'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Comuna'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Web'); ?></th>
		<th><?php echo __('Redes'); ?></th>
		<th><?php echo __('Constitucion'); ?></th>
		<th><?php echo __('Nivel'); ?></th>
		<th><?php echo __('Tiempoconst'); ?></th>
		<th><?php echo __('Actividad'); ?></th>
		<th><?php echo __('Numintegrantes'); ?></th>
		<th><?php echo __('Zonactividad'); ?></th>
		<th><?php echo __('Barrio'); ?></th>
		<th><?php echo __('Corregimiento'); ?></th>
		<th><?php echo __('Numhombre'); ?></th>
		<th><?php echo __('Nummujer'); ?></th>
		<th><?php echo __('Nummenor'); ?></th>
		<th><?php echo __('Integrantesorg'); ?></th>
		<th><?php echo __('Sociedad Id'); ?></th>
		<th><?php echo __('Sector Id'); ?></th>
		<th><?php echo __('Articulacion'); ?></th>
		<th><?php echo __('Niveladmin'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Registro'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Cargoorg'); ?></th>
		<th><?php echo __('Nomencuesta'); ?></th>
		<th><?php echo __('Numbeneficiarios'); ?></th>
		<th><?php echo __('Telfijo'); ?></th>
		<th><?php echo __('Telcel'); ?></th>
		<th><?php echo __('Poblacion Id'); ?></th>
		<th><?php echo __('Correoorg'); ?></th>
		<th><?php echo __('Numdoc'); ?></th>
		<th><?php echo __('Vereda'); ?></th>
		<th><?php echo __('Sociedad'); ?></th>
		<th><?php echo __('Sector'); ?></th>
		<th><?php echo __('Poblacion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Organizacion'] as $organizacion): ?>
		<tr>
			<td><?php echo $organizacion['id']; ?></td>
			<td><?php echo $organizacion['fecha']; ?></td>
			<td><?php echo $organizacion['persona_id']; ?></td>
			<td><?php echo $organizacion['tipo']; ?></td>
			<td><?php echo $organizacion['nombreorg']; ?></td>
			<td><?php echo $organizacion['representante']; ?></td>
			<td><?php echo $organizacion['ubicacion_id']; ?></td>
			<td><?php echo $organizacion['comuna']; ?></td>
			<td><?php echo $organizacion['direccion']; ?></td>
			<td><?php echo $organizacion['telefono']; ?></td>
			<td><?php echo $organizacion['correo']; ?></td>
			<td><?php echo $organizacion['web']; ?></td>
			<td><?php echo $organizacion['redes']; ?></td>
			<td><?php echo $organizacion['constitucion']; ?></td>
			<td><?php echo $organizacion['nivel']; ?></td>
			<td><?php echo $organizacion['tiempoconst']; ?></td>
			<td><?php echo $organizacion['actividad']; ?></td>
			<td><?php echo $organizacion['numintegrantes']; ?></td>
			<td><?php echo $organizacion['zonactividad']; ?></td>
			<td><?php echo $organizacion['barrio']; ?></td>
			<td><?php echo $organizacion['corregimiento']; ?></td>
			<td><?php echo $organizacion['numhombre']; ?></td>
			<td><?php echo $organizacion['nummujer']; ?></td>
			<td><?php echo $organizacion['nummenor']; ?></td>
			<td><?php echo $organizacion['integrantesorg']; ?></td>
			<td><?php echo $organizacion['sociedad_id']; ?></td>
			<td><?php echo $organizacion['sector_id']; ?></td>
			<td><?php echo $organizacion['articulacion']; ?></td>
			<td><?php echo $organizacion['niveladmin']; ?></td>
			<td><?php echo $organizacion['proyecto_id']; ?></td>
			<td><?php echo $organizacion['registro']; ?></td>
			<td><?php echo $organizacion['nombre']; ?></td>
			<td><?php echo $organizacion['apellido']; ?></td>
			<td><?php echo $organizacion['cargoorg']; ?></td>
			<td><?php echo $organizacion['nomencuesta']; ?></td>
			<td><?php echo $organizacion['numbeneficiarios']; ?></td>
			<td><?php echo $organizacion['telfijo']; ?></td>
			<td><?php echo $organizacion['telcel']; ?></td>
			<td><?php echo $organizacion['poblacion_id']; ?></td>
			<td><?php echo $organizacion['correoorg']; ?></td>
			<td><?php echo $organizacion['numdoc']; ?></td>
			<td><?php echo $organizacion['vereda']; ?></td>
			<td><?php echo $organizacion['sociedad']; ?></td>
			<td><?php echo $organizacion['sector']; ?></td>
			<td><?php echo $organizacion['poblacion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'organizaciones', 'action' => 'view', $organizacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'organizaciones', 'action' => 'edit', $organizacion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'organizaciones', 'action' => 'delete', $organizacion['id']), array(), __('Are you sure you want to delete # %s?', $organizacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
