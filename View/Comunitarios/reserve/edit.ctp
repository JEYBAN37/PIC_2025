<div class="comunitarios form">
<?php echo $this->Form->create('Comunitario'); ?>
	<fieldset>
		<legend><?php echo __('Editar agente Comunitario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('nombre_org',array('label'=>'Nombre de la organización') );
		echo $this->Form->input('comuna_id');
		echo $this->Form->input('corregimiento');
		echo $this->Form->input('barrio_vereda',array('label'=>'Barrio/vereda'));
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono',array('label'=>'Numero telefónico'));
		echo $this->Form->input('correo');
		echo $this->Form->input('web',array('label'=>'Sitio web'));
		echo $this->Form->input('repersentante',array('label'=>'Nombre del representante'));
		echo $this->Form->input('tel_representante',array('label'=>'Numero de contacto'));
		echo $this->Form->input('actividad_social');
		echo $this->Form->input('tipo',array('label'=>'La organización es formal o informal',
            'options' => array('formal' => 'Formal', 'informal' => 'Informal')));
		echo $this->Form->input('integrantes',array('label'=>'Numero de integrantes de la organización',
            'options' => array('1_5' => '1 a 5', '6_10' => '6 a 10', '11_20' => '11 a 20', '20_mas' => '20 o mas')));
        echo $this->Form->input('cobertura_id',array('label'=>'Cobertura de contacto'));
		echo $this->Form->input('objetivo',array('label'=>'Misión u objeto'));
		echo $this->Form->input('registro',array('label'=>'Fecha de registro'));
	?>	
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		
		<li><?php echo $this->Html->link(__('Lista Comunitarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		
	</ul>
</div>
