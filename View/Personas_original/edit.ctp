<?php $this->layout = 'formulario'?>
<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Editar Persona'); ?></legend>
	
<ul>
	
	
	
	<li> <?php echo $this->Html->link(__('Editar Integrante Acción Colectiva'), array('action' => 'edit1'))?> </li> <br />
    
    <li> <?php echo $this -> Html->link(_('Editar Agente comunitario'), array('action' => 'edit2')); ?> </li> <br/>
    
    <li> <?php echo $this -> Html->link(_('Editar Integrante SMS'), array('action' => 'edit3')); ?> </li> <br/>
    
    <li> <?php echo $this -> Html->link(_('Editar Persona publica o social'), array('action' => 'edit4')); ?> </li> <br/>

    <li> <?php echo $this -> Html->link(_('Editar Agentes Comunitarios'), array('action' => 'edit5')); ?> </li> <br/>

    <li> <?php echo $this -> Html->link(_('Editar Integrante Euipo'), array('action' => 'edit6')); ?> </li> <br/>

    <li> <?php echo $this -> Html->link(_('Editar Participante actividad'), array('action' => 'edit7')); ?> </li> <br/>

     <li> <?php echo $this -> Html->link(_('Editar actividad a participante'), array('action' => 'edit8')); ?> </li> <br/>
		
		
	
    </ul>		
		
		
			</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Persona.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Preferencias'), array('controller' => 'preferencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Preferencia'), array('controller' => 'preferencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Etnias'), array('controller' => 'etnias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Etnia'), array('controller' => 'etnias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Estudios'), array('controller' => 'estudios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Estudio'), array('controller' => 'estudios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Poblaciones'), array('controller' => 'poblaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Poblacion'), array('controller' => 'poblaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Aseguradoras'), array('controller' => 'aseguradoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Aseguradora'), array('controller' => 'aseguradoras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sociedades'), array('controller' => 'sociedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Sociedad'), array('controller' => 'sociedades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Sector'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Actividad'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Organizaciones'), array('controller' => 'organizaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Organizacion'), array('controller' => 'organizaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Personaactividades'), array('controller' => 'personaactividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona actividad'), array('controller' => 'personaactividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
