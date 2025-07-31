<?php $this->layout = 'formulario' ?>
<div class="personas form">

    <?php echo $this->Form->create('Persona'); ?>
    <fieldset>
        <legend><?php echo __('Registrar Nuevo Usuario'); ?></legend>
        <ul>




            <li> <?php echo $this->Html->link(_('Crear Agente Comunitario'), array('action' => 'add2')); ?> </li> <br/>

            <li> <?php echo $this->Html->link(_('Crear Nuevo Participante'), array('action' => 'add7')); ?> </li> <br/>

            <li> <?php echo $this->Html->link(_('Agregar Actividad a Participante'), array('action' => 'nuebus')); ?> </li> <br/>


<!--li> <?php echo $this->Html->link(_('Persona Publica o Social'), array('action' => 'add4')); ?> </li> <br/-->



            <li> <?php echo $this->Html->link(__('Integrante Acciones Colectivas'), array('controller' => 'responsables', 'action' => 'nuebus')) ?> </li> <br />

     <!--li> <?php echo $this->Html->link(_('Integrante SMS'), array('action' => 'add3')); ?> </li> <br/-->		


        </ul>
    </fieldset>

</div>
<div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>
    <ul>

        <li> <a  href="../users/bienvenida"	 >Inicio</a></li>



        <li><?php echo $this->Html->link(__('Lista Personas'), array('action' => 'nuebus')); ?></li>



        <li> <a href="http://www.fosyga.gov.co/BDUA/Consulta-Afiliados-BDUA" target="_blank">Base FOSYGA</a></li>

        <li> <a href="http://www.sisben.gov.co/atencion-al-ciudadano/Paginas/consulta-del-puntaje.aspx" target="_blank">Base SISBEN</a></li>	

        <li> <a href="http://cfiscal.contraloria.gov.co/siborinternet/certificados/certificadosPersonaNatural.asp" target="_blank">Contraloria</a></li>

        <li> <a href="https://www.procuraduria.gov.co/portal/antecedentes.html" target="_blank">Procuraduria</a></li>

    </ul>
</div>


<?php
$this->Html->css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);
?>