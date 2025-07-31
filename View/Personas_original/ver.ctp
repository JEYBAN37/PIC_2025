<?php $this->layout = 'formulario'?>
<div class="personas form">

<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Acerca de'); ?></legend>
        <ul>
	
	
	 <li> <a href="http://sistemasycomunicaciones.com.co/Manual/" target="_blank">Manual de usuario</a></li> <br/>	
    
    <li> <a href="http://www.ciudadbienestar.gov.co/" target="_blank">Pagina Ciudad Bienestar</a></li><br/>		
    <li> <a href="https://ciudadbienestar.freshdesk.com/support/home" target="_blank">Soporte y ayuda</a></li><br/>
    <li> <a href="http://www.pasto.gov.co/index.php/comunas-barrios-corregimientos-veredas"target="_blank">Comunas Pasto</a></li>
    
		
	
    </ul>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li> <a  href="../users/bienvenida"	 >Inicio</a></li>

		
		</ul>
</div>

