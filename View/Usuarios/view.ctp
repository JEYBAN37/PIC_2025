<?php $this->layout = 'view'?>
<div class="actions">		
	<ul>
	 <li>
	 <?php ?>
	 	<?php echo $this->Html->link(__('Regresar',true),array('controller'=>'usuarios','action'=>'nuebus'));?>
	 </li>
	</ul>
	</div>

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
		
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombres']); ?>
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
