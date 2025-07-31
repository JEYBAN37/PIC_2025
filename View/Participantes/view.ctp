<?php $this->layout = 'view'?>
<?php $c="Tit=Participante&"; ?>
<div class="participantes view">
<h2><?php echo __('Participante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['id']); $c.="Id=".$participante['Participante']['id']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['fecha']); $c.="Fecha=".$participante['Participante']['fecha']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participante['Usuario']['nombres'], array('controller' => 'usuarios', 'action' => 'view', $participante['Usuario']['id']));
			$c.="Usuario=".$participante['Usuario']['nombres']."&"; ?>
			&nbsp;
		</dd>
			
		<dt><?php echo __('Estudio'); ?></dt>
		<dd>
		<?php echo h($participante['Estudio']['nivel']); $c.="Estudio=".$participante['Estudio']['nivel']."&"; ?>
			&nbsp;
		</dd>
		
				
		<dt><?php echo __('Experiencia'); ?></dt>
		<dd>
		<?php echo h($participante['Ano']['años']); ?>a&ntilde;os&nbsp;<?php echo h($participante['Mes']['mes']); $c.="Experiencia=".$participante['Ano']['años']."&"; ?>
			
			&nbsp;
		</dd>
		
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['sector']); $c.="Sector=".$participante['Participante']['sector']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comuna'); ?></dt>
		<dd>
		<?php echo h($participante['Comuna']['id']);$c.="Comuna=".$participante['Comuna']['comuna']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Corregimiento'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['corregimiento']);$c.="Corregimiento=".$participante['Participante']['corregimiento']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barrio Vereda'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['barrio_vereda']);$c.="Barrio_vereda=".$participante['Participante']['barrio_vereda']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estrato'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['estrato']);$c.="Estrato=".$participante['Participante']['estrato']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimen'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['regimen']);$c.="Regimen=".$participante['Participante']['regimen']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eps'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['eps']);$c.="Eps=".$participante['Participante']['eps']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['discapacidad']);$c.="Discapacidad=".$participante['Participante']['discapacidad']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Discapacidad'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['tipo_discapacidad']);$c.="Tipo_Discapacidad=".$participante['Participante']['tipo_discapacidad']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pertenece Org'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['pertenece_org']);$c.="Pertenece_org=".$participante['Participante']['pertenece_org']."&"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Org'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['nombre_org']);$c.="Nombre_org=".$participante['Participante']['nombre_org']."&"; ?>
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
