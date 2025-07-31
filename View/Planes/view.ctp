<?php $this->layout = 'printactividades' ?>
<h3>Plan de Saldu Publica de Intervenciones Colectivas</h3>
<p>Planes se sesión</p>


<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		<?php echo ('Acciones'); ?> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><a href="../../users/home"> Home</a> </li>
		<li><?php echo $this->Html->link(('Regresar a registros'), array('controller' => 'planes', 'action' => 'index')); ?> </li>
		<li class="divider"></li>
		<li><a href="javascript:window.print();"> Imprimir</a> </li>
		<li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>

	</ul>
</div>
<table cellpadding="0" cellspacing="0" class="table-hover table-striped table-bordered">

	<thead>
		<tr>
			<td rowspan="4" colspan="2"><img src="../../img/logoescudopasto.jpg" width="110" height="auto"></td>
		</tr>
		<tr>
			<td colspan="6">PROCESO SALUD PÚBLICA</td>
		</tr>
		<tr>
			<td colspan="6">NOMBRE DEL FORMATO: PLAN DE SESION</td>
		</tr>
		<td colspan="2">VIGENCIA: PIC_2023</td>
		<td>VERSION:02</td>
		<td colspan="1">CÓDIGO: SP-F-00X</td>
		<td colspan="1">PÁGINA:</td>


		<tr>
			<th colspan="7" style="text-align: center; "><?php echo ('Plan de sesión'); ?></th>


		</tr>

		<tr>
			
			<td>Id: <?php echo ($plan['Plan']['id']); ?></td>
			<th><?php echo ('Fecha'); ?></th>
			<td ><?php echo ($plan['Plan']['fecha']); ?></td>
			<th>Dimensión</th>
			<td ><?php echo ($plan['Plan']['dimension']); ?>
			</td>
			<th>Proceso</th>
			<td><?php echo ($plan['Plan']['proceso']); ?></td>
			
		</tr>

		<tr>			
			<th><?php echo ('Tema'); ?></th>
			<td colspan="6"><?php echo ($plan ['Plan']['tema'] ); ?></td>
		</tr>

		<tr>
			<th colspan="2"><?php echo ('Objetivo general '); ?></th>
			<td colspan="6"><?php echo ($plan['Plan']['objetivog']); ?>
				&nbsp;
			</td>

		</tr>

		<tr>
			<th colspan="2"><?php echo ('Objetivo especificos'); ?></th>
			<td colspan="6"> <?php echo ($plan['Plan']['objetivoe']); ?>
				&nbsp;
			</td>

		</tr>
		<tr>
			<th>Tipo de población </th>
			<td colspan="6"><?php echo ($plan['Plan']['tipoblacion']); ?>
			</td>
			

			

		</tr>

		<tr>
			<th colspan="7" style="text-align: center; "><?php echo ('Desarrollo Plan de sesión'); ?></th>
		</tr>
		<tr>
		<th  style="text-align: center; "><?php echo ('Momento inicial'); ?></th>
			<td colspan="4"><?php echo ($plan['Plan']['momento']); ?></td>
			<th><?php echo ('Duración'); ?></th>
			<td><?php echo ($plan['Plan']['duracion']); ?>minutos</td>	
			

		</tr>
		<tr>
			<th colspan="7" style="text-align: center; "><?php echo ('Metodologia'); ?></th>
		</tr>
		<tr>
		
			<td colspan="7"><?php echo ($plan['Plan']['metodologia']); ?></td>
		</tr>

		
		<tr>
		<th  style="text-align: center; "><?php echo ('Momento uno'); ?></th>
			<td colspan="4"><?php echo ($plan['Plan']['momentouno']); ?></td>
			<th><?php echo ('Duración'); ?></th>
			<td><?php echo ($plan['Plan']['duracionuno']); ?>minutos</td>	
			

		</tr>
		<tr>
			<th colspan="7" style="text-align: center; "><?php echo ('Metodologia'); ?></th>
		</tr>
		<tr>
		
			<td colspan="7"><?php echo ($plan['Plan']['metodologiauno']); ?></td>
		</tr>

	

		<tr>
		<th  style="text-align: center; "><?php echo ('Momento dos'); ?></th>
			<td colspan="4"><?php echo ($plan['Plan']['momentodos']); ?></td>
			<th><?php echo ('Duración'); ?></th>
			<td><?php echo ($plan['Plan']['duraciondos']); ?>minutos</td>	
			

		</tr>
		<tr>
			<th colspan="7" style="text-align: center; "><?php echo ('Metodologia'); ?></th>
		</tr>
		<tr>
		
			<td colspan="7"><?php echo ($plan['Plan']['metodologiados']); ?></td>
		</tr>

		

		<tr>
		<th  style="text-align: center; "><?php echo ('Momento tres'); ?></th>
			<td colspan="4"><?php echo ($plan['Plan']['momentotres']); ?></td>
			<th><?php echo ('Duración'); ?></th>
			<td><?php echo ($plan['Plan']['duraciontres']); ?>minutos</td>	
			

		</tr>
		<tr>
			<th colspan="7" style="text-align: center; "><?php echo ('Metodologia'); ?></th>
		</tr>
		<tr>
		
			<td colspan="7"><?php echo ($plan['Plan']['metodologiatres']); ?></td>
		</tr>

		<tr>
			<th colspan="7" style="text-align: center; "><?php echo ('Resultado general'); ?></th>
		</tr>
		<tr>
		
			<td colspan="7"><?php echo ($plan['Plan']['resultado']); ?></td>
		</tr>

</thead>

</table>



<script type="text/javascript">
	$(document).ready(function() {
		$('textarea').each(function() {
			this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
		}).on('input', function() {
			this.style.height = 'auto';
			this.style.height = (this.scrollHeight) + 'px';
		});

	});
</script>