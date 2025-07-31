
<?php $this->layout = 'formulario' ?>
<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<div class="infoeventos form">
    <?php echo $this->Form->create('Infoevento', array('type' => 'file', 'novalidate' => 'novalidate')); ?>
    <fieldset>
        <legend><?php echo __('Agregar Informe o Evento'); ?></legend>

        <?php echo $this->Form->input('id');?>
      
           
            <div class="form-group col-md-12">
                <?php

                echo $this->Form->input('anexo', array('label'=>'archivos cargados', 'readonly'));
                
                echo $this->Form->input('anexo', array('label' => '°Soportes', 'type' => 'file' , 'class' => 'form-control', 'onchange'=>'validarTamanioSoporte()'));

                echo('NOTA: Cargar en archivo comprimido extensión ".zip" o ".rar" * en formato .pdf' );
                echo $this->Form->input('informe_dir', array('type' => 'hidden'));
                echo('El nombre del archivo no tiene que tener tildes o diéresis' );

                echo $this->Form->input('fecharegistro', array('label' => ' Fecha de registro', 'type' => 'hidden'));
                ?>
            </div>
            
            


    </fieldset>
    <?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Opciones'); ?></h3>
    <ul>

       <li><?php echo $this->Html->link(__('Lista informes/eventos'), array('controller' => 'eventosviewtests', 'action' => 'nuebus')); ?></li>          

        <li><?php echo $this->Html->link(__('Lista Sistematizaciones'), array('controller' => 'actividadesviewtests', 'action' => 'nuebus')); ?> </li>

      
      
    </ul>
</div>

<?php
$this->Html->css([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.select-search').select2();
        $('.select-search-multi').select2({
            closeOnSelect:false
        });
        agregarOpcionSeleccion();

        /*
        $('#poblaciones').val('');
         var data = $('#poblaciones_aux').select2('data').map(function(elem){ 
                return elem.text 
           });
         $('#poblaciones').val(data);
         $('#poblaciones_aux').on('select2:unselecting', function (e) {
            $('#poblaciones').val('');
        });
        */

    });

     
    function validarTamanioSoporte(){
        var auxFile = document.getElementById('InfoeventoAnexo');
        var sizeF = auxFile.files[0].size;
        
        if(sizeF > 5000000)
        {
            alert('El archivo debe ser menor a 5 Mb');
            auxFile.value = '';
        }
    }

     function agregarOpcionSeleccion(){
        //$("#InfoeventoUbicacionId").prepend("<option value='' selected='selected'>Seleccione</option>");
       // $("#InfoeventoProductoId").prepend("<option value='' selected='selected'>Seleccione</option>");
       // $("#InfoeventoResponsableId").prepend("<option value='' selected='selected'>Seleccione</option>");
    }

</script>

