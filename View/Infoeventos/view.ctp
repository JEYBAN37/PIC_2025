<?php $this->layout = 'printactividades' ?>

<h3>Plan de Saldu Publica de Intervenciones Colectivas</h3>
<p>Informes y documentos PIC-2020</p>

<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		<?php echo __('Acciones'); ?> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><a href="../../users/home"> Home</a> </li>
		<li><?php echo $this->Html->link(__('Regresar a registros'), array('controller' => 'eventosviewtests', 'action' => 'nuebus')); ?> </li>
		<li><?php echo $this->Html->link(__('Editar Informe'), array('action' => 'edit', $infoevento['Infoevento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Actualizar anexo'), array('action' => 'editanexo', $infoevento['Infoevento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo informe'), array('action' => 'add')); ?> </li>
		<!--li>
			<td><?php echo $this->Form->postLink(__('Borrar registro'), array('action' => 'delete', $infoevento['Infoevento']['id']), array(), __('Esta seguro/a de eliminar registro con ID# %s?', $infoevento['Infoevento']['id'])); ?>
		</li-->
		<li class="divider"></li>
		<li><a href="javascript:window.print();"> Imprimir</a> </li>
		<li><a class="copi" href="javascript:getlink();">Copiar URL</a> </li>

	</ul>
</div>

<table class="table-hover table-striped table-bordered">

<thead>

	<td rowspan="4"><img src="../../img/logoescudopasto.jpg" width="110" height="auto"></td>
	</tr>
	<tr>
		<td colspan="6">PROCESO SALUD PÚBLICA</td>
	</tr>
	<tr>
		<td colspan="6">REGISTRO DE INFORME O EVENTOS PIC</td>
	</tr>
	<td>VIGENCIA: 2020</td>
	<td>VERSION:01</td>
	<td>CÓDIGO: 000000</td>
	<td>PÁGINA:</td>

	</tr>



	<table class="table-hover table-striped table-bordered">


		<tr>

			<td>ID</td>
			<td colspan="3">FECHA</td>
			<td colspan="3">TIPO</td>

		</tr>

		<tr>
			<td><?php echo h($infoevento['Infoevento']['id']); ?></td>
			<td colspan="3"><?php echo h($infoevento['Infoevento']['fecha']); ?></td>
			<td colspan="3"><?php echo h($infoevento['Infoevento']['tipo']); ?></td>

		</tr>

		<tr>
			<td><?php echo __('Tema'); ?></td>
			<td colspan="8"> <?php echo h($infoevento['Infoevento']['tema']); ?></td>

		</tr>

		<tr>
			<td><?php echo __('Ubicacion'); ?></td>
			<td><?php echo h($infoevento['Ubicacion']['barrio']); ?></td>
			<td><?php echo h($infoevento['Ubicacion']['comuna']); ?></td>
			<td><?php echo __('Vereda'); ?></td>
			<td><?php echo h($infoevento['Infoevento']['vereda']); ?></td>
			<td><?php echo __('Lugar'); ?></td>
			<td><?php echo h($infoevento['Infoevento']['lugar']); ?></td>
		</tr>



		<tr>
			<td><?php echo __('Dimension'); ?></td>
			<td colspan="3"><?php echo h($infoevento['Producto']['dimensiones']); ?></td>
			<td><?php echo __('Entorno'); ?></td>
			<td colspan="3"><?php echo h($infoevento['Producto']['entorno']); ?></td>

		</tr>

		<tr>
			<td><?php echo __('Producto'); ?></td>
			<td colspan="3"><?php echo h($infoevento['Producto']['activity']); ?></td>
			<td><?php echo __('Tarea'); ?></td>
			<td colspan="2"><?php echo h($infoevento['Producto']['tarea']); ?></td>
		</tr>
		<tr>
			<td colspan="2"><?php echo __('Producto1'); ?></td>
			<td><?php echo h($infoevento['Infoevento']['producto1']); ?></td>
			<td colspan="2"><?php echo __('Observación'); ?></td>
			<td colspan="3"><?php echo h($infoevento['Infoevento']['observacion']); ?></td>

		</tr>

		<tr>
			<td><?php echo __('Anexo'); ?></td>
			<td colspan="6"> <?php echo $this->Html->link('../files/infoevento/anexo/' . $infoevento['Infoevento']['informe_dir'] . '/' . $infoevento['Infoevento']['anexo']); ?>


		</tr>

		<tr>

			<td colspan="1"><?php echo __('Poblaciones '); ?></td>
			<td colspan="2"><?php echo h($infoevento['Infoevento']['poblaciones']); ?></td>
			<td><?php echo __('Nombre grupo '); ?></td>
			<td colspan="3"><?php echo h($infoevento['Infoevento']['nombregrupo']); ?></td>

		</tr>

	</table>


	<table class="table-hover table-striped table-bordered">
		<tr>
			<td><?php echo __('Responsable'); ?></td>
			<td colspan="2"><?php echo h($infoevento['Responsable']['nombres']); ?></td>

			<td><?php echo __('Creado'); ?></td>
			<td><?php echo h($infoevento['Infoevento']['created']); ?></td>
			<td><?php echo __('Actualizado'); ?></td>
			<td><?php echo h($infoevento['Infoevento']['modified']); ?></td>
			<td><a href="javascript:window.print();">Imprimir</a></td>
		</tr>

	</table>


	

	<thead>

</table>

	<?php
	/*$this->Html->css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        ], ['block' => 'css']
);
$this->Html->script([
    'https://code.jquery.com/jquery-3.2.1.min.js',
    'https://cdn.ckeditor.com/4.9.2/basic/ckeditor.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
        ], ['block' => 'script']
);*/
	?>
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