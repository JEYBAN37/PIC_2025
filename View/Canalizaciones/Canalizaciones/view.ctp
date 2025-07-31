<?php $this->layout = 'view'?>
<div class="canalizaciones view">
<h2><?php echo __('Canalizacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['fecha']); ?>
			&nbsp;
			
			</dd>
		<dt><?php echo __('I. DATOS'); ?></dt>
		<dd>
			
			
		</dd>
		<dt><?php echo __('Tipo documento'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['tipodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($canalizacion['Ubicacion']['barrio'], array('controller' => 'ubicaciones', 'action' => 'view', $canalizacion['Ubicacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vereda'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['vereda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['comunas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corregimiento'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['corregimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo afiliación'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['tipoafi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('II SOLICITUD CIUDADANA'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['solicitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('III CANALIZACIÓN'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['canalizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacion dos'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacion tres'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compromiso'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['compromiso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orientacion'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['orientacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['responsable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
			<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'nuebus')); ?></li>

	</ul>
</div>
