<div class="usuarios index">
<center><h2><?php__('Usuarios'); ?></h2></center>
<table cellpadding="0" cellspacing="0"border="1">
<?php
header('Content-type: application/xls');
header('Content-Disposition:attachment;filename=usuario.xls');
?>
<tr>
  <th><?php echo $xls->writeString('id');?></th>
  <th><?php echo $xls->writeString('Documento');?></th>
  <th><?php echo $xls->writeString('Numero');?></th>
  <th><?php echo $xls->writeString('Nombres');?></th>
  <th><?php echo $xls->writeString('Apellidos');?></th>
  <th><?php echo $xls->writeString('Fecha');?></th>
  <th><?php echo $xls->writeString('Edad');?></th>
  <th><?php echo $xls->writeString('Genero');?></th>
  <th><?php echo $xls->writeString('Group');?></th>
  <th><?php echo $xls->writeString('Celular');?></th>
  <th><?php echo $xls->writeString('Telefono');?></th>
  <th><?php echo $xls->writeString('Correo');?></th>
  <th><?php echo $xls->writeString('Profesion');?></th>
  <th><?php echo $xls->writeString('Cargo');?></th>
  <th><?php echo $xls->writeString('Ano');?></th>
  <th><?php echo $xls->writeString('Mes');?></th>
  <th><?php echo $xls->writeString('Fecha Reg');?></th>
  </tr>

  

<?php $i=0; 
 foreach ($usuarios as $usuario):
     $class=null;  
       if($i++ % 2 == 0){
           $class='class="altrow"';
        }
  ?>
  <tr<?php echo $class;?>>

   <td><?php echo $usuario['Usuario']['id'];?>&nbsp;</td>
   <td><?php echo $usuario['Documento']['tipo_doc'];?>&nbsp;</td>
   <td><?php echo $usuario['Usuario']['numero'];?>&nbsp;</td>
   <td><?php echo $usuario['Usuario']['nombres'];?>&nbsp;</td>
   <td><?php echo $usuario['Usuario']['apellidos'];?>&nbsp;</td>
   <td><?php echo $usuario['Day']['dia'];?>&nbsp;</td>
   <td><?php echo $usuario['Month']['mes'];?>&nbsp;</td>
   <td><?php echo $usuario['Fecha']['año'];?>&nbsp;</td>
   <td><?php echo $usuario['Edad']['rango'];?>&nbsp;</td>
   <td><?php echo $usuario['Genero']['genero'];?>&nbsp;</td>
   <td><?php echo $usuario['Group']['pertenece'];?>&nbsp;</td>
   <td><?php echo $usuario['usuario']['celular'];?>&nbsp;</td>
   <td><?php echo $usuario['Usuario']['telefono'];?>&nbsp;</td>
   <td><?php echo $usuario['Usuario']['correo'];?>&nbsp;</td>
   <td><?php echo $usuario['Usuario']['profesion'];?>&nbsp;</td>
   <td><?php echo $usuario['Usuario']['cargo'];?>&nbsp;</td>
   <td><?php echo $usuario['Ano']['año'];?>&nbsp;</td>
   <td><?php echo $usuario['Mes']['mes'];?>&nbsp;</td>
   <td><?php echo $usuario['Usuario']['fecha_reg'];?>&nbsp;</td>
</tr>
<?php endforeach; ?>  