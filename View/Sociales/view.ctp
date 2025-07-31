<?php $this->layout='view'?>
<?php $c="Tit=Organización social&"; ?>
<div class="sociales view">
<h2><?php echo __('Registro de Agentes Sociales'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['id']); $c.="Id=".$sociale['Sociale']['id']."&"; ?>
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sociale['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $sociale['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono_contacto'); ?></dt>
		<dd>
			<?php echo h($sociale['Usuario']['telefono']); $c.="Telefono=".$sociale['Usuario']['telefono']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Org'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['nombre_org']); $c.="Nombre de organzaciones=".$sociale['Sociale']['nombre_org']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
			<?php echo h($sociale['Comuna']['comuna']); $c.="Comuna=".$sociale['Comuna']['comuna']."&"; ?>
			
			&nbsp;
		</dd>
		<dt><?php echo __('Corregimiento'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['corregimiento']); $c.="Corregimiento=".$sociale['Sociale']['corregimiento']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio Vereda'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['barrio_vereda']); $c.="Barrio=".$sociale['Sociale']['barrio_vereda']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['direccion']); $c.="Dirección=".$sociale['Sociale']['direccion']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['telefono']); $c.="Telefono=".$sociale['Sociale']['id']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['correo']); $c.="Correo electrónico=".$sociale['Sociale']['correo']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['web']); $c.="Pagina web=".$sociale['Sociale']['web']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['nivel']); $c.="Nivel=".$sociale['Sociale']['nivel']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representante'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['representante']); $c.="Representante_organización=".$sociale['Sociale']['id']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poblacion'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['poblacion']); $c.="poblacion=".$sociale['Sociale']['poblacion']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['objetivo']); $c.="Objetivo=".$sociale['Sociale']['objetivo']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sociedad'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociedad']['tipo']); $c.="Tipo de sociedad=".$sociale['Sociedad']['tipo']."&"; ?>
			&nbsp;			
		</dd>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($sociale['Sociale']['registro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
		<ul>
	 <li>
	 <?php ?> 	<?php echo $this->html->link("Imprimir", "/usuarios/dinamic_pdf?".$c);
?> </li>
	</ul>
	</div>
	<br/>


