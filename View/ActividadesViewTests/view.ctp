<div class="actividadesViewTests view">
<h2><?php echo __('Actividades View Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tema'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['tema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesViewTest['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $actividadesViewTest['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesViewTest['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $actividadesViewTest['Ubicacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['comuna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['barrio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['zona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesViewTest['Producto']['numporductos'], array('controller' => 'productos', 'action' => 'view', $actividadesViewTest['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lineas'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['lineas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimensiones'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['dimensiones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombredim'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['nombredim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costodim'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['costodim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linormativas'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['linormativas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['resultado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['activity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vidacursos'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['vidacursos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entorno'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['entorno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tecnologias'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['tecnologias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcproducto'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['porcproducto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porctareas'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['porctareas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clasobjetivos'); ?></dt>
		<dd>
			<?php echo h($actividadesViewTest['ActividadesViewTest']['clasobjetivos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividades View Test'), array('action' => 'edit', $actividadesViewTest['ActividadesViewTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividades View Test'), array('action' => 'delete', $actividadesViewTest['ActividadesViewTest']['id']), array(), __('Are you sure you want to delete # %s?', $actividadesViewTest['ActividadesViewTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades View Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividades View Test'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
