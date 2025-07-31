<?php $this->layout = 'view'?>
<div class="instituciones view">
<h2><?php echo __('Institucion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($institucion ['Institucion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['fecha']); ?>
			&nbsp;
		</dd>
		
		
		<?php echo ('Información de la institución u organización'); ?>
		
		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['nombre_inst']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Representante'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['representante']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($institucion['Ubicacion']['barrio']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($institucion['Ubicacion']['comuna']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['barrio_institucion']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Corregimiento'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['corregimiento_inst']); ?>
			&nbsp;
		</dd>
		
				
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['direccion_institucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['telefono_institucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['correo_institucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Redes'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['redes']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['nivel_operativo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['actividad']); ?>
			&nbsp;
			</dd>
			
			
		
		<?php echo ('Información del contacto'); ?>
		
		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['nombre']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['apellido']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Telefono fijo'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['telfijo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Telefono celular'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['telcel']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['correo_contacto']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($institucion['Institucion']['cargo_inst']); ?>
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
