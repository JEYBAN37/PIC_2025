<?php $this->layout='view'?>
<?php $c="Tit=Instituciones publicas&"; ?>
<div class="publicos view">
<h2><?php echo __('Agentes sector Publico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['id']); $c.="Id=".$publico['Publico']['id']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['fecha']); $c.="Fecha Registro=".$publico['Publico']['fecha']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($publico['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $publico['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Inst'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['nombre_inst']); $c.="Nombre Institución=".$publico['Publico']['nombre_inst']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representante'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['representante']); $c.="Representante=".$publico['Publico']['representante']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>

			<?php echo h($publico['Comuna']['comuna']); $c.="Comuna=".$publico['Comuna']['comuna']."&"; ?>
			
			&nbsp;
		</dd>
		<dt><?php echo __('Corregimiento'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['corregimiento']); $c.="Corregimiento=".$publico['Publico']['corregimiento']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio Vereda'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['barrio_vereda']); $c.="Barrio vereda=".$publico['Publico']['barrio_vereda']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['direccion']); $c.="Dirección=".$publico['Publico']['direccion']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['telefono']); $c.="Telefono=".$publico['Publico']['telefono']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['correo']); $c.="Correo electronico=".$publico['Publico']['correo']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['web']); $c.="Pagina web=".$publico['Publico']['web']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nivel'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['nivel']); $c.="Nivel=".$publico['Publico']['nivel']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['objetivo']); $c.="Objetivo=".$publico['Publico']['objetivo']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($publico['Publico']['registro']); ?>
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

