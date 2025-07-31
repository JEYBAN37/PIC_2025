<?php $this->layout = 'print' ?>


<div class="productos view">


<table class="table-hover table-striped table-bordered"> <!-- Lo cambiaremos por CSS -->
           
           <tr>
                <td colspan="7" style="text-align: center; "><?php echo __('Producto anexo tecnico 2019'); ?></td>
               
                
            </tr>

            <tr>
                <td><?php echo __('Id'); ?></td>
                <td><?php echo ($producto['Producto']['id']); ?></td>
              
            </tr>

            <tr>
                
                <td><?php echo __('Dimension'); ?></td>
                <td colspan="6"><?php echo ($producto['Producto']['dimensiones']); ?></td>
              
            </tr>
            <tr>
              <td><?php echo __('Norma'); ?></td>
                <td colspan="6"><?php echo ($producto['Producto']['linormativas']); ?></td>
            </tr>
            

            <tr>
                
                <td><?php echo __('Producto'); ?></td>
                <td><?php echo ($producto['Producto']['resultado']); ?></td>
                <td colspan="5"><?php echo ($producto['Producto']['activity']); ?></td>
               
               
            </tr>

            <tr>
                <td><?php echo __('Entorno'); ?></td>                
                <td><?php echo __('Curso de vida'); ?></td>               
                <td><?php echo __('Tecnologia'); ?></td>
                <td colspan="2"><?php echo __('% Producto'); ?></td>
                <td colspan="2"><?php echo __('Costo'); ?></td>
               
            </tr>

        <tr>

           <td ><?php echo ($producto['Producto']['entorno']); ?></td>
            <td ><?php echo ($producto['Producto']['vidacursos']); ?></td>
            <td colspan="2"><?php echo ($producto['Producto']['tecnologias']); ?></td>
            <td colspan="2"><?php echo ($producto['Producto']['porcproducto']); ?></td>
             <td colspan="2"><?php echo ($producto['Producto']['costodim']); ?></td>
            

        </tr>

           
         
            
            
                <tr>
                
                <td><?php echo __('Responsable'); ?></td>
                <td colspan="6"><?php echo $this->Html->link($producto['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $producto['Responsable']['id'])); ?>
			&nbsp;
		</td>
            </tr>
               

           
                <tr>
                <td><?php echo __('Preguntasentido'); ?></td>
                <td colspan="6"><?php echo ($producto['Producto']['preguntasentido']); ?>
			&nbsp;
		</td>
                
            </tr>

           
             
                
                <tr>
                <td colspan="7" style="width:100%;">
                    <table>
                        <td><?php echo __('Anexo'); ?></td>
                  <td colspan="2"><?php echo $this->Html->link('../files/producto/anexo/' . $producto['Producto']['dirproduc'] . '/' . $producto['Producto']['anexo']); ?> </td>


             <td><?php echo __('Enlaceurl'); ?></td>
                <td colspan="2">
            <?php echo ($producto['Producto']['enlace']); ?>
            &nbsp;</td>
             <td colspan="2">
            <?php echo ($producto['Producto']['enlacedos']); ?>
            &nbsp;</td>

            <td><?php echo __('Fecharegistro'); ?></td>
                <td colspan="2"><?php echo ($producto['Producto']['fecharegistro']); ?>
            &nbsp;</td>
        
        
		
                 </table>
                </td>
            </tr>
                
        </table>












<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numproductos'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['numproductos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lineas'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['lineas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimensiones'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['dimensiones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombredim'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['nombredim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Costodim'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['costodim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linormativas'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['linormativas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['resultado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['activity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vidacursos'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['vidacursos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entorno'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['entorno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tecnologias'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['tecnologias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcproducto'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['porcproducto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porctareas'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['porctareas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clasobjetivos'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['clasobjetivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evidencia'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['evidencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Actividad']['id'], array('controller' => 'actividades', 'action' => 'view', $producto['Actividad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Acta']['id'], array('controller' => 'actas', 'action' => 'view', $producto['Acta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Responsable']['nombres'], array('controller' => 'responsables', 'action' => 'view', $producto['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Registro'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['fecha_registro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentajeavance'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['porcentajeavance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacionpic'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['observacionpic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacionsms'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['observacionsms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referente Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['referente_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enlace'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['enlace']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enlacedos'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['enlacedos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Actualizado'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['fecha_actualizado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		
		
	</ul>

	<ul>
		<li><?php echo $this->Html->link(__('Agregar observacion SMS'), array('action' => 'smsedit', $producto['Producto']['id'])); ?> </li>

		
	</ul>
  

 




</td></tr>


</div>

<div class="related">
	<h3><?php echo __('Actas Relacionadas'); ?></h3>
	<?php if (!empty($producto['Acta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Tema'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Objactividad'); ?></th>
		<th><?php echo __('Grupo'); ?></th>
		<th><?php echo __('Fecharegistro'); ?></th>
		<th><?php echo __('Actualizado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
		
	</tr>
	<?php foreach ($producto['Acta'] as $acta): ?>
		<tr>
			<td><?php echo $acta['id']; ?></td>
			<td><?php echo $acta['fecha']; ?></td>			
			<td><?php echo $acta['tema']; ?></td>
			<td><?php echo $acta['ubicacion_id']; ?></td>
			<td><?php echo $acta['responsable_id']; ?></td>
			<td><?php echo $acta['objactividad']; ?></td>
			<td><?php echo $acta['grupo']; ?></td>
			<td><?php echo $acta['fecharegistro']; ?></td>
			<td><?php echo $acta['actualizado']; ?></td>
			<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller' => 'actas', 'action' => 'view', $acta['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller' => 'actas', 'action' => 'edit', $acta['id'])); ?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Actividades relacionadas'); ?></h3>
	<?php if (!empty($producto['Actividad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Tema'); ?></th>
		<th><?php echo __('Ubicacion Id'); ?></th>
		<th><?php echo __('Caracteristicasesion'); ?></th>
		<th><?php echo __('Anexo'); ?></th>
		<th><?php echo __('Actividad Dir'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Fecharegistro'); ?></th>
		<th><?php echo __('Actualizado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Actividad'] as $actividad): ?>
		<tr>
			<td><?php echo $actividad['id']; ?></td>
			<td><?php echo $actividad['fecha']; ?></td>			
			<td><?php echo $actividad['tema']; ?></td>
			<td><?php echo $actividad['ubicacion_id']; ?></td>
			<td><?php echo $actividad['caracteristicasesion']; ?></td>			
			<td><?php echo $actividad['anexo']; ?></td>
			<td><?php echo $actividad['actividad_dir']; ?></td>
			<td><?php echo $actividad['responsable_id']; ?></td>
			<td><?php echo $actividad['fecharegistro']; ?></td>
			<td><?php echo $actividad['actualizado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actividades', 'action' => 'view', $actividad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actividades', 'action' => 'edit', $actividad['id'])); ?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>

<div class="related">
	<h3><?php echo __('Planes de sesion relacionados'); ?></h3>
	<?php if (!empty($producto['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Tema'); ?></th>
		<th><?php echo __('Intension'); ?></th>
		<th><?php echo __('Obj Individuos'); ?></th>
		<th><?php echo __('Obj Organizaciones'); ?></th>
		<th><?php echo __('Obj Instituciones'); ?></th>
		<th><?php echo __('Objetivog'); ?></th>
		<th><?php echo __('Dimension'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>		
		<th><?php echo __('Fecharegistro'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['fecha']; ?></td>
			<td><?php echo $producto['tema']; ?></td>
			<td><?php echo $producto['intension']; ?></td>
			<td><?php echo $producto['obj_individuos']; ?></td>
			<td><?php echo $producto['obj_organizaciones']; ?></td>
			<td><?php echo $producto['obj_instituciones']; ?></td>
			<td><?php echo $producto['objetivog']; ?></td>
			<td><?php echo $producto['dimension']; ?></td>
			<td><?php echo $producto['responsable_id']; ?></td>			
			<td><?php echo $producto['fecharegistro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'plsesiones', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'plsesiones', 'action' => 'edit', $producto['id'])); ?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
