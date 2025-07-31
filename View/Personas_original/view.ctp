<?php $this->layout = 'view' ?>
<div class="personas view">
    <h2><?php echo __('Persona'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['id']); ?>
            &nbsp;
        </dd>

        <dt><?php echo __('Tipoidoc'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['tipoidoc']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Identificacion'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['identificacion']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Apellidos'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['apellidos']); ?>
            &nbsp;
        </dd>

        <dt><?php echo __('Nombres'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['nombres']); ?>
            &nbsp;
        </dd>

        <dt><?php echo __('Fechanac'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['fechanac']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Edad'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['edad']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Barrio'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['vereda']); ?>

            &nbsp;
        </dd>
        <dt><?php echo __('Comuna'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['comuna']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ubicación SIGP'); ?></dt>
        <dd>
            <?php echo h($persona['Ubicacion']['barrio']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Celular'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['celular']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Telefono'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['telefono']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Correo'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['correo']); ?>
            &nbsp;
        </dd>

        <dt><?php echo __('Profesion'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['profesion']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ocupacion'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['ocupacion']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cargo'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['cargo']); ?>
            &nbsp;
        </dd>

        <dt><?php echo __('Poblacion'); ?></dt>
        <dd>
            <?php echo h($persona['Poblacion']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Discapacidad'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['discapacidad']); ?>
            &nbsp;
        </dd>

        <dt><?php echo __('Aseguradora'); ?></dt>
        <dd>
            <?php h($persona['Aseguradora']['aseguradora']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Regimen'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['regimen']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Perteneceorganizacion'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['perteneceorganizacion']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sociedad'); ?></dt>
        <dd>
            <?php echo h($persona['Sociedad']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sector'); ?></dt>
        <dd>
            <?php echo $this->Html->link($persona['Sector']['id'], array('controller' => 'sectores', 'action' => 'view', $persona['Sector']['id'])); ?>
            &nbsp;
        </dd>

        <dt><?php echo __('Fecharegistro'); ?></dt>
        <dd>
            <?php echo h($persona['Persona']['fecharegistro']); ?>
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

