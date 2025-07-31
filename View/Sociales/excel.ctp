<?php
 
// Importamos la clase PHPExcel
App::import('Vendor', 'Classes/PHPExcel');
        
$objPHPExcel = new PHPExcel();
 
$objPHPExcel->getProperties()->setCreator("Ciudad Bienestar")
                             ->setLastModifiedBy("Administrador")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Organizaciones_sociales")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");
 
 
//agregamos los datos
$i=1;
foreach ($sociales as $sociale){
  
  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A'.$i, $sociale['Sociale']['id'])
              ->setCellValue('B'.$i, $sociale['Sociale']['nombre_org'])
              ->setCellValue('C'.$i, $sociale['Sociale']['comuna_id'])
              ->setCellValue('D'.$i, $sociale['Sociale']['corregimiento'])              
              ->setCellValue('E'.$i, $sociale['Sociale']['barrio_vereda'])
              ->setCellValue('F'.$i, $sociale['Sociale']['direccion'])
              ->setCellValue('G'.$i, $sociale['Sociale']['telefono'])
              ->setCellValue('H'.$i, $sociale['Sociale']['correo'])
              ->setCellValue('I'.$i, $sociale['Sociale']['web'])
              ->setCellValue('J'.$i, $sociale['Sociale']['nivel'])
              ->setCellValue('K'.$i, $sociale['Sociale']['representante'])
              ->setCellValue('L'.$i, $sociale['Sociale']['poblacion'])
              ->setCellValue('M'.$i, $sociale['Sociale']['objetivo'])
              ->setCellValue('N'.$i, $sociale['Sociedad']['tipo'])
              ->setCellValue('O'.$i, $sociale['Sociale']['registro'])
              ->setCellValue('P'.$i, $sociale['Usuario']['celular'])
              ->setCellValue('Q'.$i, $sociale['Usuario']['correo'])
              ->setCellValue('R'.$i, $sociale['Usuario']['nombres'])
             ;
              $i++; 

}
 
$objPHPExcel->getActiveSheet()->setTitle('Org_sociales_CB');
$objPHPExcel->setActiveSheetIndex(0);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Org_sociales_CB.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>