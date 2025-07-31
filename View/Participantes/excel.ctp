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
foreach ($participantes as $participante){
  
  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A'.$i, $participante['Participante']['id'])
              ->setCellValue('B'.$i, $participante['Usuario']['nombres'])
              ->setCellValue('C'.$i, $participante['Usuario']['genero_id'])             
              ->setCellValue('D'.$i, $participante['Preferencia']['preferencia'])
              ->setCellValue('E'.$i, $participante['Estudio']['nivel'])
              ->setCellValue('F'.$i, $participante['Grupo']['etnia'])              
              ->setCellValue('G'.$i, $participante['Victima']['tipo'])
              ->setCellValue('H'.$i, $participante['Participante']['actividad_economica'])
              ->setCellValue('I'.$i, $participante['Participante']['sector'])
              ->setCellValue('J'.$i, $participante['Comuna']['comuna'])
              ->setCellValue('K'.$i, $participante['Participante']['corregimiento'])
              ->setCellValue('L'.$i, $participante['Participante']['barrio_vereda'])
              ->setCellValue('M'.$i, $participante['Participante']['estrato'])
              ->setCellValue('N'.$i, $participante['Participante']['regimen'])
              ->setCellValue('O'.$i, $participante['Participante']['eps'])
              ->setCellValue('P'.$i, $participante['Participante']['discapacidad'])
              ->setCellValue('Q'.$i, $participante['Participante']['tipo_discapacidad'])
              ->setCellValue('R'.$i, $participante['Participante']['pertenece_org'])
              ->setCellValue('S'.$i, $participante['Participante']['nombre_org'])
              ->setCellValue('T'.$i, $participante['Participante']['registro']);
              $i++; 

}
 
$objPHPExcel->getActiveSheet()->setTitle('Participantes_CB');
$objPHPExcel->setActiveSheetIndex(0);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Paricipantes_CB.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>