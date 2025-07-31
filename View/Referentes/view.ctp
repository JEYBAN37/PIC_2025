<div class="referentes view">
<h2><?php echo __('Referente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodoc'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['tipodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nac'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['fecha_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familiar'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['familiar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parentesco'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['parentesco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Familiar'); ?></dt>
		<dd>
			<?php echo h($referente['Referente']['tel_familiar']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referente'), array('action' => 'edit', $referente['Referente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Referente'), array('action' => 'delete', $referente['Referente']['id']), array(), __('Are you sure you want to delete # %s?', $referente['Referente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Referentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
