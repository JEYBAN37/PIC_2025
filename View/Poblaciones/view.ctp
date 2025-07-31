<div class="poblaciones view">
<h2><?php echo __('Poblacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($poblacion['Poblacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poblacion'); ?></dt>
		<dd>
			<?php echo h($poblacion['Poblacion']['poblacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caracteristica'); ?></dt>
		<dd>
			<?php echo h($poblacion['Poblacion']['caracteristica']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Poblacion'), array('action' => 'edit', $poblacion['Poblacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Poblacion'), array('action' => 'delete', $poblacion['Poblacion']['id']), array(), __('Are you sure you want to delete # %s?', $poblacion['Poblacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Poblaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poblacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actividades'); ?></h3>
	<?php if (!empty($poblacion['Actividad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fechainicio'); ?></th>
		<th><?php echo __('Fechafinal'); ?></th>
		<th><?php echo __('Tema'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Equipo Id'); ?></th>
		<th><?php echo __('Poblacion Id'); ?></th>
		<th><?php echo __('Sesion'); ?></th>
		<th><?php echo __('Tiposesion'); ?></th>
		<th><?php echo __('Tipoactividad'); ?></th>
		<th><?php echo __('Objetivo'); ?></th>
		<th><?php echo __('Objetivoestrategia Id'); ?></th>
		<th><?php echo __('Archivodigital'); ?></th>
		<th><?php echo __('Entidad Id'); ?></th>
		<th><?php echo __('Registro'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($poblacion['Actividad'] as $actividad): ?>
		<tr>
			<td><?php echo $actividad['id']; ?></td>
			<td><?php echo $actividad['fechainicio']; ?></td>
			<td><?php echo $actividad['fechafinal']; ?></td>
			<td><?php echo $actividad['tema']; ?></td>
			<td><?php echo $actividad['ubicacion_id']; ?></td>
			<td><?php echo $actividad['usuario_id']; ?></td>
			<td><?php echo $actividad['equipo_id']; ?></td>
			<td><?php echo $actividad['poblacion_id']; ?></td>
			<td><?php echo $actividad['sesion']; ?></td>
			<td><?php echo $actividad['tiposesion']; ?></td>
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
	<h3><?php echo __('Related Organizaciones'); ?></h3>
	<?php if (!empty($poblacion['Organizacion'])): ?>
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
		<th><?php echo __('Numbeneficiarios'); ?></th>
		<th><?php echo __('Zonactividad'); ?></th>
		<th><?php echo __('Barrio'); ?></th>
		<th><?php echo __('Corregimiento'); ?></th>
		<th><?php echo __('Numhombre'); ?></th>
		<th><?php echo __('Nummujer'); ?></th>
		<th><?php echo __('Nummenor'); ?></th>
		<th><?php echo __('Integrantesorg'); ?></th>
		<th><?php echo __('Poblacion Id'); ?></th>
		<th><?php echo __('Sociedad Id'); ?></th>
		<th><?php echo __('Sector Id'); ?></th>
		<th><?php echo __('Articulacion'); ?></th>
		<th><?php echo __('Niveladmin'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Registro'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($poblacion['Organizacion'] as $organizacion): ?>
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
			<td><?php echo $organizacion['numbeneficiarios']; ?></td>
			<td><?php echo $organizacion['zonactividad']; ?></td>
			<td><?php echo $organizacion['barrio']; ?></td>
			<td><?php echo $organizacion['corregimiento']; ?></td>
			<td><?php echo $organizacion['numhombre']; ?></td>
			<td><?php echo $organizacion['nummujer']; ?></td>
			<td><?php echo $organizacion['nummenor']; ?></td>
			<td><?php echo $organizacion['integrantesorg']; ?></td>
			<td><?php echo $organizacion['poblacion_id']; ?></td>
			<td><?php echo $organizacion['sociedad_id']; ?></td>
			<td><?php echo $organizacion['sector_id']; ?></td>
			<td><?php echo $organizacion['articulacion']; ?></td>
			<td><?php echo $organizacion['niveladmin']; ?></td>
			<td><?php echo $organizacion['proyecto_id']; ?></td>
			<td><?php echo $organizacion['registro']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($poblacion['Persona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grupo'); ?></th>
		<th><?php echo __('Tipoidoc'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Apellido1'); ?></th>
		<th><?php echo __('Apellido2'); ?></th>
		<th><?php echo __('Nombre1'); ?></th>
		<th><?php echo __('Nombre2'); ?></th>
		<th><?php echo __('Fechanac'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Barrio'); ?></th>
		<th><?php echo __('Comuna'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Genero Id'); ?></th>
		<th><?php echo __('Preferencia Id'); ?></th>
		<th><?php echo __('Etnia Id'); ?></th>
		<th><?php echo __('Estudio Id'); ?></th>
		<th><?php echo __('Profesion'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Tiempoexperiencia'); ?></th>
		<th><?php echo __('Poblacion Id'); ?></th>
		<th><?php echo __('Discapacidad'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Aseguradora Id'); ?></th>
		<th><?php echo __('Regimen'); ?></th>
		<th><?php echo __('Perteneceorganizacion'); ?></th>
		<th><?php echo __('Sociedad Id'); ?></th>
		<th><?php echo __('Sector Id'); ?></th>
		<th><?php echo __('Nombrecontacto'); ?></th>
		<th><?php echo __('Parentesco'); ?></th>
		<th><?php echo __('Teefonolacudiente'); ?></th>
		<th><?php echo __('Actividad Id'); ?></th>
		<th><?php echo __('Fecharegistro'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($poblacion['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id']; ?></td>
			<td><?php echo $persona['grupo']; ?></td>
			<td><?php echo $persona['tipoidoc']; ?></td>
			<td><?php echo $persona['identificacion']; ?></td>
			<td><?php echo $persona['apellido1']; ?></td>
			<td><?php echo $persona['apellido2']; ?></td>
			<td><?php echo $persona['nombre1']; ?></td>
			<td><?php echo $persona['nombre2']; ?></td>
			<td><?php echo $persona['fechanac']; ?></td>
			<td><?php echo $persona['edad']; ?></td>
			<td><?php echo $persona['barrio']; ?></td>
			<td><?php echo $persona['comuna']; ?></td>
			<td><?php echo $persona['celular']; ?></td>
			<td><?php echo $persona['telefono']; ?></td>
			<td><?php echo $persona['correo']; ?></td>
			<td><?php echo $persona['genero_id']; ?></td>
			<td><?php echo $persona['preferencia_id']; ?></td>
			<td><?php echo $persona['etnia_id']; ?></td>
			<td><?php echo $persona['estudio_id']; ?></td>
			<td><?php echo $persona['profesion']; ?></td>
			<td><?php echo $persona['ocupacion']; ?></td>
			<td><?php echo $persona['cargo']; ?></td>
			<td><?php echo $persona['tiempoexperiencia']; ?></td>
			<td><?php echo $persona['poblacion_id']; ?></td>
			<td><?php echo $persona['discapacidad']; ?></td>
			<td><?php echo $persona['ubicacion_id']; ?></td>
			<td><?php echo $persona['aseguradora_id']; ?></td>
			<td><?php echo $persona['regimen']; ?></td>
			<td><?php echo $persona['perteneceorganizacion']; ?></td>
			<td><?php echo $persona['sociedad_id']; ?></td>
			<td><?php echo $persona['sector_id']; ?></td>
			<td><?php echo $persona['nombrecontacto']; ?></td>
			<td><?php echo $persona['parentesco']; ?></td>
			<td><?php echo $persona['teefonolacudiente']; ?></td>
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
	<?php if (!empty($poblacion['Proyecto'])): ?>
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
	<?php foreach ($poblacion['Proyecto'] as $proyecto): ?>
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
