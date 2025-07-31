<?php
 
// Importamos la clase PHPExcel
App::import('Vendor', 'Classes/PHPExcel');
        
$objPHPExcel = new PHPExcel();
 
$objPHPExcel->getProperties()->setCreator("Ciudad Bienestar")
                             ->setLastModifiedBy("Administrador")
                             ->setTitle("Office 2007 XLSX Test Document")
                             ->setSubject("Office 2007 XLSX Test Document")
                             ->setDescription("Organizaciones_comunitarias")
                             ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");
 
 
//agregamos los datos
$i=1;
foreach ($comunitarios as $comunitario){
  
  $objPHPExcel->setActiveSheetIndex(0)

              ->setCellValue('A'.$i, $comunitario['Comunitario']['id'])
              ->setCellValue('B'.$i, $comunitario['Usuario']['nombres'])
              ->setCellValue('C'.$i, $comunitario['Usuario']['celular'])
              ->setCellValue('D'.$i, $comunitario['Usuario']['correo'])                      
              ->setCellValue('E'.$i, $comunitario['Comunitario']['nombre_org'])
              ->setCellValue('F'.$i, $comunitario['Comuna']['comuna'])
              ->setCellValue('G'.$i, $comunitario['Comunitario']['corregimiento'])
              ->setCellValue('H'.$i, $comunitario['Comunitario']['barrio_vereda'])
              ->setCellValue('I'.$i, $comunitario['Comunitario']['direccion'])
              ->setCellValue('J'.$i, $comunitario['Comunitario']['telefono'])
              ->setCellValue('K'.$i, $comunitario['Comunitario']['correo'])
              ->setCellValue('L'.$i, $comunitario['Comunitario']['web'])
              ->setCellValue('M'.$i, $comunitario['Comunitario']['representante'])
              ->setCellValue('N'.$i, $comunitario['Comunitario']['tel_representante'])
              ->setCellValue('O'.$i, $comunitario['Comunitario']['tipo'])
              ->setCellValue('P'.$i, $comunitario['Comunitario']['integrantes'])
              ->setCellValue('Q'.$i, $comunitario['Cobertura']['personas'])
              ->setCellValue('R'.$i, $comunitario['Comunitario']['objetivo'])
              ->setCellValue('S'.$i, $comunitario['Comunitario']['registro'])
             ;
              $i++; 

}
 
$objPHPExcel->getActiveSheet()->setTitle('Org_comunitarias_CB');
$objPHPExcel->setActiveSheetIndex(0);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Org_comunitarias_CB.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>