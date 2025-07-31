<?php $this->layout = 'view'?>
<div class="responsables view">
<h2><?php echo __('Responsable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodoc'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['tipodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nac'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['fecha_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familiar'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['familiar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parentesco'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['parentesco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Familiar'); ?></dt>
		<dd>
			<?php echo h($responsable['Responsable']['tel_familiar']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?> </li>
	</ul>
</div>

