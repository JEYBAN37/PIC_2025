<?php
 
// Importamos la clase PHPExcel
App::import('Vendor', 'Classes/PHPExcel');
        
$objPHPExcel = new PHPExcel();
 
$objPHPExcel->getProperties()->setCreator("Ciudad Bienestar")
                             ->setLastModifiedBy("Administrador")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Instituciones publicas")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");
 
 
//agregamos los datos
$i=1;
foreach ($publicos as $publico){
  
  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A'.$i, $publico['Publico']['id'])
              ->setCellValue('B'.$i, $publico['Usuario']['nombres'])
              ->setCellValue('C'.$i, $publico['Usuario']['celular'])
              ->setCellValue('D'.$i, $publico['Usuario']['correo'])             
              ->setCellValue('E'.$i, $publico['Publico']['nombre_inst'])
              ->setCellValue('F'.$i, $publico['Publico']['representante'])
              ->setCellValue('G'.$i, $publico['Comuna']['comuna'])
              ->setCellValue('H'.$i, $publico['Publico']['corregimiento'])
              ->setCellValue('I'.$i, $publico['Publico']['barrio_vereda'])
              ->setCellValue('J'.$i, $publico['Publico']['direccion'])
              ->setCellValue('K'.$i, $publico['Publico']['telefono'])
              ->setCellValue('L'.$i, $publico['Publico']['correo'])
              ->setCellValue('M'.$i, $publico['Publico']['web'])
              ->setCellValue('N'.$i, $publico['Publico']['nivel'])
              ->setCellValue('O'.$i, $publico['Publico']['objetivo'])
              ->setCellValue('P'.$i, $publico['Publico']['registro'])
              ;
              $i++; 

}
 
$objPHPExcel->getActiveSheet()->setTitle('Participantes_CB');
$objPHPExcel->setActiveSheetIndex(0);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Ins_publicas_CB.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>