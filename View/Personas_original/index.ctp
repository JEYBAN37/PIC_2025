<?php $this->layout = 'formulario'?>
<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('grupo'); ?></th>
			<th><?php echo $this->Paginator->sort('tipoidoc'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			
			<th><?php echo $this->Paginator->sort('fechanac'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('barrio'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('genero_id'); ?></th>
			<th><?php echo $this->Paginator->sort('preferencia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('etnia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estudio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profesion'); ?></th>
			<th><?php echo $this->Paginator->sort('ocupacion'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('tiempoexperiencia'); ?></th>
			<th><?php echo $this->Paginator->sort('poblacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('discapacidad'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('aseguradora_id'); ?></th>
			<th><?php echo $this->Paginator->sort('regimen'); ?></th>
			<th><?php echo $this->Paginator->sort('perteneceorganizacion'); ?></th>
			<th><?php echo $this->Paginator->sort('sociedad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sector_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombrecontacto'); ?></th>
			<th><?php echo $this->Paginator->sort('parentesco'); ?></th>
			<th><?php echo $this->Paginator->sort('teefonolacudiente'); ?></th>
			<th><?php echo $this->Paginator->sort('actividad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecharegistro'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['grupo']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['tipoidoc']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellidos']); ?>&nbsp;</td>
		
		<td><?php echo h($persona['Persona']['nombres']); ?>&nbsp;</td>
		
		<td><?php echo h($persona['Persona']['fechanac']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['edad']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['ubicacion_id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['comuna']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['celular']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['correo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($persona['Genero']['genero'], array('controller' => 'generos', 'action' => 'view', $persona['Genero']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($persona['Preferencia']['preferencia'], array('controller' => 'preferencias', 'action' => 'view', $persona['Preferencia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($persona['Etnia']['id'], array('controller' => 'etnias', 'action' => 'view', $persona['Etnia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($persona['Estudio']['estudio'], array('controller' => 'estudios', 'action' => 'view', $persona['Estudio']['id'])); ?>
		</td>
		<td><?php echo h($persona['Persona']['profesion']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['ocupacion']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['tiempoexperiencia']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($persona['Poblacion']['id'], array('controller' => 'poblaciones', 'action' => 'view', $persona['Poblacion']['id'])); ?>
		</td>
		<td><?php echo h($persona['Persona']['discapacidad']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($persona['Ubicacion']['id'], array('controller' => 'ubicaciones', 'action' => 'view', $persona['Ubicacion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($persona['Aseguradora']['id'], array('controller' => 'aseguradoras', 'action' => 'view', $persona['Aseguradora']['id'])); ?>
		</td>
		<td><?php echo h($persona['Persona']['regimen']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['perteneceorganizacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($persona['Sociedad']['id'], array('controller' => 'sociedades', 'action' => 'view', $persona['Sociedad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($persona['Sector']['id'], array('controller' => 'sectores', 'action' => 'view', $persona['Sector']['id'])); ?>
		</td>
		<td><?php echo h($persona['Persona']['nombrecontacto']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['parentesco']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['teefonolacudiente']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($persona['Actividad']['tema'], array('controller' => 'actividades', 'action' => 'view', $persona['Actividad']['id'])); ?>
		</td>
		<td><?php echo h($persona['Persona']['fecharegistro']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $persona['Persona']['id'])); ?>

			
			<?php echo $this->Html->link(__('Editar Integrante Acción Colectiva'), array('action' =>'edit1', $persona['Persona']['id']));?>
			<?php echo $this->Html->link(__('Editar Agente Comunitario'), array('action' =>'edit2', $persona['Persona']['id']));?>
			<?php echo $this->Html->link(__('Editar Integrante SMS'), array('action' =>'edit3', $persona['Persona']['id']));?>
			<?php echo $this->Html->link(__('Editar Integrante Persona Publica o Social'), array('action' =>'edit4', $persona['Persona']['id']));?>
			<?php echo $this->Html->link(__('Editar Integrante Agentes Comunitarios'), array('action' =>'edit5', $persona['Persona']['id']));?>
			<?php echo $this->Html->link(__('Editar Integrante Equipo'), array('action' =>'edit6', $persona['Persona']['id']));?>
			<?php echo $this->Html->link(__('Editar Participante Actividad'), array('action' =>'edit7', $persona['Persona']['id']));?>
			<?php echo $this->Html->link(__('Editar Actividad a Participante'), array('action' =>'edit8', $persona['Persona']['id']));?>
			
			
				
		
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $persona['Persona']['id']), array(), __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('action' => 'add')); ?></li>
		<li> <?php echo $this -> Html->link(_('Consulta usuarios'), array('action' => 'nuebus')); ?> </li> <br/>
	</ul>
</div>
