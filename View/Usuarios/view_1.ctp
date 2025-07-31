<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
		    <?php echo h($usuario['Documento']['tipo_doc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombres']); ?>
			&nbsp;
		</dd>		
		
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
		<?php echo h($usuario['Day']['dia']); ?>
		<?php echo h($usuario['Month']['mes']); ?>
		<?php echo h($usuario['Fecha']['año']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($usuario['Edad']['rango']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($usuario['Genero']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representa'); ?></dt>
		<dd>
			<?php echo h($usuario['Group']['pertenece']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel&eacute;fono'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesi&oacute;n'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['cargo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Exp_laboral'); ?> </dt>
		<dd>
			<?php echo h($usuario['Ano']['años']); ?>a&ntilde;os
			<?php echo h($usuario['Mes']['mes']); ?>meses
			&nbsp;
		</dd>
		
		<dt><?php echo __('Fecha Reg'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fecha_reg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit_1', $usuario['Usuario']['id'])); ?> </li>		
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('pdf'), array('controller' => 'usuarios', 'action' => 'pdf')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Comunitario'), array('controller' => 'comunitarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Publicos'), array('controller' => 'publicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Publico'), array('controller' => 'publicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sociales'), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Social'), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Registros'), array('controller' => 'registros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Registro'), array('controller' => 'registros', 'action' => 'add')); ?> </li>
	</ul>
</div>


