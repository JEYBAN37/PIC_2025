<?php $this->layout='view'?>

<div class="integrantes view">
<h2><?php echo __('Integrante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
		<?php echo h($integrante['Documento']['tipo_doc']); ?>
			
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['nombres']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Fecha Nac.'); ?></dt>
		<dd>
		<?php echo h($integrante['Day']['dia']); ?>	<?php echo h($integrante['Month']['mes']); ?> <?php echo h($integrante['Fecha']['año']); ?>
					
			&nbsp;
		</dd>
		
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
		<?php echo h($integrante['Genero']['genero']); ?>			
			&nbsp;
		</dd>
		<dt><?php echo __('Pertenece'); ?></dt>
		<dd>
		<?php echo h($integrante['Group']['pertenece']); ?>	
			
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesi&oacute;n'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experiencia'); ?></dt>
		<dd>
         <?php echo h($integrante['Ano']['años']); ?> a&ntilde;os <?php echo h($integrante['Mes']['mes']); ?> meses
					
			&nbsp;
		</dd>
		
		<dt><?php echo __('Fecha Reg'); ?></dt>
		<dd>
			<?php echo h($integrante['Integrante']['fecha_reg']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

