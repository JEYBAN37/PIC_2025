<?php
 
// Importamos la clase PHPExcel
App::import('Vendor', 'Classes/PHPExcel');
        
$objPHPExcel = new PHPExcel();
 
$objPHPExcel->getProperties()->setCreator("Ciudad Bienestar")
                             ->setLastModifiedBy("Administrador")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Usuarios")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");
 
 
//agregamos los datos
$i=1;
foreach ($usuarios as $usuario){
  
  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A'.$i, $usuario['Usuario']['id'])
              ->setCellValue('B'.$i, $usuario['Documento']['tipo_doc'])
              ->setCellValue('C'.$i, $usuario['Usuario']['nombres'])              
              ->setCellValue('D'.$i, $usuario['Edad']['rango'])
              ->setCellValue('E'.$i, $usuario['Genero']['genero'])
              ->setCellValue('F'.$i, $usuario['Group']['pertenece'])
              ->setCellValue('G'.$i, $usuario['Usuario']['celular'])
              ->setCellValue('H'.$i, $usuario['Usuario']['telefono'])
              ->setCellValue('I'.$i, $usuario['Usuario']['correo'])
              ->setCellValue('J'.$i, $usuario['Usuario']['profesion'])
              ->setCellValue('K'.$i, $usuario['Usuario']['cargo'])
              ->setCellValue('L'.$i, $usuario['Usuario']['fecha_reg']); 
              $i++; 

}
 
$objPHPExcel->getActiveSheet()->setTitle('Usuarios_CB');
$objPHPExcel->setActiveSheetIndex(0);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Usuarios_CB.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>