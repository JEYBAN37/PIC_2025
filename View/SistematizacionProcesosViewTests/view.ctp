<div class="sistematizacionProcesosViewTests view">
<h2><?php echo __('Sistematizacion Procesos View Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proactividad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sistematizacionProcesosViewTest['Proactividad']['id'], array('controller' => 'proactividades', 'action' => 'view', $sistematizacionProcesosViewTest['Proactividad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poblaciones'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['poblaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['grupo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sistematizacionProcesosViewTest['Producto']['nombreproducto'], array('controller' => 'productos', 'action' => 'view', $sistematizacionProcesosViewTest['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('N Producto'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['N_producto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimension'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['Dimension']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['producto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caracteristicasesion'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['caracteristicasesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otrocual'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['otrocual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objactividad'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['objactividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contobjetivo'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['contobjetivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contpremisa'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['contpremisa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contperspectiva'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['contperspectiva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contribucionenfoque'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['contribucionenfoque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tema'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['tema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sistematizacionProcesosViewTest['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $sistematizacionProcesosViewTest['Ubicacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna Actividad'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['comuna_actividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['barrio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['zona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sistematizacionProcesosViewTest['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $sistematizacionProcesosViewTest['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo h($sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['responsable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plsesion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sistematizacionProcesosViewTest['Plsesion']['nombreplan'], array('controller' => 'plsesiones', 'action' => 'view', $sistematizacionProcesosViewTest['Plsesion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sistematizacion Procesos View Test'), array('action' => 'edit', $sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sistematizacion Procesos View Test'), array('action' => 'delete', $sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id']), array(), __('Are you sure you want to delete # %s?', $sistematizacionProcesosViewTest['SistematizacionProcesosViewTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sistematizacion Procesos View Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sistematizacion Procesos View Test'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proactividades'), array('controller' => 'proactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proactividad'), array('controller' => 'proactividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plsesiones'), array('controller' => 'plsesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plsesion'), array('controller' => 'plsesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
