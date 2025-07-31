<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">

                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>

                </div>
                <?php echo $this->Form->create('Plsmomento'); ?>
                <fieldset>

                    <h2 class="page-header">Nuevo momento</h2>
                    <div class="row">
                        <?php
                        $idAux = $_GET['sesion'];
                        echo $this->Form->input('plsesion_id', array('value' => '' . $idAux, 'type' => 'hidden'));
                        ?>

                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('momento', array('label' => '(Nombre del momento)', 'class' => 'ckeditor')); ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $optiontime =  array(' ' => 'Elegir', '5 minutos' => '5 minutos', '10 minutos' => '10 minutos', '15 minutos' => '15 minutos', '20 minutos' => '20 minutos', '25 minutos' => '25 minutos', '30 minutos' => '30 minutos', '35 minutos' => '35 minutos', '40 minutos' => '40 minutos', '45 minutos' => '45 minutos', '50 minutos' => '50 minutos', '55 minutos' => '55 minutos', 'Una Hora' => 'Una Hora', 'Una Hora y media' => 'Una Hora y media', 'Dos Horas' => 'Dos Horas', 'Tres Horas' => 'Tres Horas', 'Cuatro horas' => 'Cuatro horas', 'Seis horas' => 'Seis horas', 'Ocho horas' => 'Ocho horas');
                            echo $this->Form->input('duracion', array('label' => 'Duración de actividad', 'type' => 'select', 'class' => 'form-control', 'options' => $optiontime));
                            ?>
                        </div>

                        <div class="form-group col-md-6">
                            <?php
                            $optiontime =  array(' ' => 'Elegir', 'No aplica' => 'No aplica', 'Prevención Polvora' => 'Pólvora', 'PAI' => 'PAI', 'Tuberculosis' => 'Tuberculosis', 'Hasen Lepra' => 'Hasen/Lepra', 'Ley 1335' => 'Ley 1335', );
                            echo $this->Form->input('accioninformativa', array('label' => 'Acción informativa', 'type' => 'select', 'class' => 'form-control', 'options' => $optiontime));
                            ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('metodologia', array('label' => 'Metodología utilizada', 'class' => 'ckeditor')); ?>
                        </div>

                        <div class="form-group col-md-12">
                            <?php echo $this->Form->input('resultado', array('label' => 'Resultado momento', 'class' => 'ckeditor')); ?>
                        </div>
                        <div class="form-group col-md-12">
                        <p class="help-block">Incluya o describa los medios o herramientas virtuales a utilizar en este momento </p>
                            <?php echo $this->Form->input('insumo', array('label' => 'Insumos o materiales didacticos', 'class' => 'ckeditor')); ?>
                           
                        </div>
                    </div>
                </fieldset>

                <div class="row">
                    <div class="form-group col-md-6">
                        <?php //echo $this->Form->end(__('Guardar y Listar')); 
                        ?>
                        <?php echo $this->Form->submit('Guardar Otro', array('name' => 'btn')); ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?php echo $this->Form->submit('Finalizar', array('name' => 'btn')); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
$this->Html->css([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
], ['block' => 'css']);
$this->Html->script([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>