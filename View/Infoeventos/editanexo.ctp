<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading" class="page-header">
                    <?php $this->layout = 'formulario' ?>
                    <?php echo $this->Html->script('ckeditor/ckeditor'); ?>
                </div>
                <?php echo $this->Form->create('Infoevento', array('type' => 'file', 'novalidate' => 'novalidate')); ?>


                <fieldset>
                    <h2 class="page-header">Actualizar soporte Informe o Evento</h2>


                    <?php echo $this->Form->input('id'); ?>

                    <div class="row">

                        <div class="form-group col-md-12">
                            <?php

                            echo $this->Form->input('anexo', array('label' => 'archivos cargados', 'readonly'));

                            echo $this->Form->input('anexo', array('label' => '°Soportes', 'type' => 'file', 'class' => 'form-control', 'onchange' => 'validarTamanioSoporte()'));

                            echo ('NOTA: Cargar en archivo comprimido extensión ".zip" o ".rar" * en formato .pdf');
                            echo $this->Form->input('informe_dir', array('type' => 'hidden'));
                            echo ('El nombre del archivo no tiene que tener tildes o diéresis');       
                                                
                            ?>
                        </div>
                    </div>




                </fieldset>
                <?php echo $this->Form->end(__('Enviar')); ?>
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

            <script type="text/javascript">
                $(document).ready(function() {
                    $('.select-search').select2();
                    $('.select-search-multi').select2({
                        closeOnSelect: false
                    });
                    agregarOpcionSeleccion();


                });


                function validarTamanioSoporte() {
                    var auxFile = document.getElementById('InfoeventoAnexo');
                    var sizeF = auxFile.files[0].size;

                    if (sizeF > 5000000) {
                        alert('El archivo debe ser menor a 5 Mb');
                        auxFile.value = '';
                    }
                }

         
            </script>