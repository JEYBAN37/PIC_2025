<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">
                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>
                </div>



                <?php echo $this->Form->create('Plsesion', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
                <fieldset>
                    <h2 class="page-header">Actualizar anexo</h2>
                    
                    <h3> Tenga en cuenta que eliminara el archivo almacenado, una vez cargue y envié este formulario.</h3>
                    <div class="form-group col-md-12">
                        <?php
                        echo $this->Form->input('id');
                        echo ('Adjuntar anexo');
                        echo $this->Form->input('anexo', array('label' => 'archivos cargados', 'readonly'));
                        echo $this->Form->input('anexo', array('type' => 'file', 'class' => 'form-control', 'onchange' => 'validarTamanioSoporte()'));
                        echo $this->Form->input('dir', array('type' => 'hidden'));
                        echo $this->Form->input('actualizado', array('label' => ' Fecha de actualización', 'type' => 'hidden'));
                        ?>
                    </div>
                </fieldset>
                <?php echo $this->Form->end(__('Enviar')); ?>
            </div>
        </div>
    </div>
</div>





<?php
$this->Html->css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
], ['block' => 'css']);
$this->Html->script([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
], ['block' => 'script']);
?>

<script type="text/javascript">
    function validarTamanioSoporte() {
        var auxFile = document.getElementById('PlsesionAnexo');
        var sizeF = auxFile.files[0].size;
        if (sizeF > 5000000) {
            alert('El archivo debe ser menor a 5 Mb');
            auxFile.value = '';
        }
    }
</script>