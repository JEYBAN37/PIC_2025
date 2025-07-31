<?php $this->layout = 'view'?>
<div class="organizaciones view">
<h2><?php echo __('Organización'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['fecha']); ?>
			&nbsp;
		</dd>
		
		
		<?php echo ('Información de la institución u organización'); ?>
		
		
		<dt><?php echo __('Organización'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['tipo_org']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['nombre_org']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Representante'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['representante']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($organizacion['Ubicacion']['barrio']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($organizacion['Ubicacion']['comuna']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Barrio'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['barrio_org']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Corregimiento'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['corregimiento_org']); ?>
			&nbsp;
		</dd>
		
				
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['direccion_org']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['telefono_org']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['correo_org']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Redes'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['redes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Constitucion'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['constitucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['nivel_operativo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['actividad']); ?>
			&nbsp;
			</dd>
			
			
		<dt><?php echo __('Zona actividad'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['zonaactividad']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Integrantes'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['integrantesorg']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Poblaciones'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['poblaciones_ident']); ?>
			&nbsp;
		</dd>
		
		
		<dt><?php echo __('Sociedad'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['sociedad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['sector']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Articulacion'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['articulacion']); ?>
			&nbsp;
		</dd>
		
		
		<?php echo ('Información del contacto'); ?>
		
		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['nombre']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['apellido']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Telefono fijo'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['telfijo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Telefono celular'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['telcel']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['correo_contacto']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($organizacion['Organizacion']['cargoorg']); ?>
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
