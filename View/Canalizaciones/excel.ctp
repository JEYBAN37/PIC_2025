<?php
 
// Importamos la clase PHPExcel
App::import('Vendor', 'Classes/PHPExcel');
        
$objPHPExcel = new PHPExcel();
 
$objPHPExcel->getProperties()->setCreator("Ciudad Bienestar")
                             ->setLastModifiedBy("Administrador")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Canalizaciones")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");
 
 
//agregamos los datos
$i=1;
foreach ($canalizaciones as $canalizacion){
  
  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A'.$i, $canalizacion['Canalizacion']['id'])
              ->setCellValue('B'.$i, $canalizacion['Canalizacion']['fecha'])
              ->setCellValue('C'.$i, $canalizacion['Canalizacion']['tipodoc'])
              ->setCellValue('D'.$i, $canalizacion['Canalizacion']['identificacion'])
              ->setCellValue('E'.$i, $canalizacion['Canalizacion']['nombres'])
              
               ->setCellValue('G'.$i, $canalizacion['Canalizacion']['apellidos'])
               ->setCellValue('F'.$i, $canalizacion['Ubicacion']['barrio'])
              ->setCellValue('H'.$i, $canalizacion['Canalizacion']['vereda'])
              ->setCellValue('I'.$i, $canalizacion['Canalizacion']['comunas'])
              ->setCellValue('J'.$i, $canalizacion['Canalizacion']['corregimiento'])
              ->setCellValue('K'.$i, $canalizacion['Canalizacion']['direccion'])
              ->setCellValue('L'.$i, $canalizacion['Canalizacion']['telefono'])
              ->setCellValue('M'.$i, $canalizacion['Canalizacion']['celular'])
              ->setCellValue('N'.$i, $canalizacion['Canalizacion']['correo'])
              ->setCellValue('O'.$i, $canalizacion['Canalizacion']['solicitud'])
              ->setCellValue('P'.$i, $canalizacion['Canalizacion']['canalizacion'])
              ->setCellValue('Q'.$i, $canalizacion['Canalizacion']['canalizacionuno'])
              ->setCellValue('R'.$i, $canalizacion['Canalizacion']['canalizaciondos'])
              ->setCellValue('S'.$i, $canalizacion['Canalizacion']['compromiso'])
              ->setCellValue('T'.$i, $canalizacion['Canalizacion']['orientacion'])
              ->setCellValue('U'.$i, $canalizacion['Canalizacion']['responsable'])
              ->setCellValue('V'.$i, $canalizacion['Canalizacion']['concepto'])
              ->setCellValue('W'.$i, $canalizacion['Canalizacion']['fecharegistro'])
              

              ;
              $i++; 

}
 
$objPHPExcel->getActiveSheet()->setTitle('UCanalizaciones_CB');
$objPHPExcel->setActiveSheetIndex(0);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Canalizaciones_CB.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>