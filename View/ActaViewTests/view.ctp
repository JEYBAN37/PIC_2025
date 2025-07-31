<div class="actaViewTests view">
<h2><?php echo __('Acta View Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['grupo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tema'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['tema']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objactividad'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['objactividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alcancereunion'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['alcancereunion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actaViewTest['Ubicacion']['id'], array('controller' => 'ubicaciones', 'action' => 'view', $actaViewTest['Ubicacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['comuna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['barrio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['zona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actaViewTest['Producto']['numporductos'], array('controller' => 'productos', 'action' => 'view', $actaViewTest['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lineas'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['lineas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimensiones'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['dimensiones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombredim'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['nombredim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costodim'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['costodim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linormativas'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['linormativas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['resultado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['activity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vidacursos'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['vidacursos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entorno'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['entorno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tecnologias'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['tecnologias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcproducto'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['porcproducto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porctareas'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['porctareas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clasobjetivos'); ?></dt>
		<dd>
			<?php echo h($actaViewTest['ActaViewTest']['clasobjetivos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acta View Test'), array('action' => 'edit', $actaViewTest['ActaViewTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acta View Test'), array('action' => 'delete', $actaViewTest['ActaViewTest']['id']), array(), __('Are you sure you want to delete # %s?', $actaViewTest['ActaViewTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acta View Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta View Test'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
