<?php $this->layout='view'?>
<?php echo $this->element('menuorgc');?>

<?php $c="Tit=Organizacion_comunitaria&"; ?>
<div class="comunitarios view">
<h2><?php echo __('Comunitario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['id']); $c.="Id=".$comunitario['Comunitario']['id']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['fecha']);$c.="Fecha=".$comunitario['Comunitario']['fecha']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comunitario['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $comunitario['Usuario']['id']));$c.="Nombre_contacto=".$comunitario['Usuario']['nombres']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono_contacto'); ?></dt>
		<dd>
			<?php echo h($comunitario['Usuario']['celular']); $c.="Celular=".$comunitario['Usuario']['celular']."&"; ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Organización'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['nombre_org']);$c.="Nombre organización=".$comunitario['Comunitario']['nombre_org']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
		    <?php echo h($comunitario['Comuna']['comuna']);$c.="Comuna=".$comunitario['Comuna']['comuna']."&"; ?>			
			&nbsp;
		</dd>
		<dt><?php echo __('Corregimiento'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['corregimiento']);$c.="Corregimiento=".$comunitario['Comunitario']['corregimiento']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio /Vereda'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['barrio_vereda']);$c.="Barrio_Vereda=".$comunitario['Comunitario']['barrio_vereda']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirección'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['direccion']);$c.="Dirección=".$comunitario['Comunitario']['direccion']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['telefono']);$c.="Telefono=".$comunitario['Comunitario']['telefono']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['correo']);$c.="Correo=".$comunitario['Comunitario']['correo']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['web']);$c.="Barrio_Vereda=".$comunitario['Comunitario']['web']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repersentante'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['representante']);$c.="Representante_org=".$comunitario['Comunitario']['representante']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel Representante'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['tel_representante']);$c.="Telefono_representante=".$comunitario['Comunitario']['tel_representante']."&"; ?>
			&nbsp;
		</dd>
		
		
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['tipo']);$c.="Tipo de organización=".$comunitario['Comunitario']['tipo']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Integrantes'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['integrantes']);$c.="Integrantes=".$comunitario['Comunitario']['integrantes']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cobertura'); ?></dt>
		<dd>
		    <?php echo h($comunitario['Cobertura']['personas']);$c.="Cobertura de trabajo=".$comunitario['Cobertura']['personas']."&"; ?>			
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['objetivo']);$c.="Objetivo=".$comunitario['Comunitario']['objetivo']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($comunitario['Comunitario']['registro']);?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
		<ul>
	 <li>
	 <?php ?><?php echo $this->html->link("Imprimir", "/usuarios/dinamic_pdf?".$c);
?> </li>
	</ul>
	</div>
	<br/>

