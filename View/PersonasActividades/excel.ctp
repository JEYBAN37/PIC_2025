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

foreach ($personasActividades as $personasActividad){
  
  $objPHPExcel->setActiveSheetIndex(0)
  		->setCellValue('A'.$i, $personasActividad['PersonasActividad']['id'])
      ->setCellValue('B'.$i, $personasActividad['PersonasActividad']['registro'])
      ->setCellValue('C'.$i, $personasActividad['Actividad']['id'])
      ->setCellValue('D'.$i, $personasActividad['Actividad']['fecha'])
      ->setCellValue('E'.$i, $personasActividad['Actividad']['hora_inicio'])
      ->setCellValue('F'.$i, $personasActividad['Actividad']['hora_fin'])
      ->setCellValue('G'.$i, $personasActividad['Actividad']['tema'])
      ->setCellValue('H'.$i, $personasActividad['Actividad']['nombregrupo'])
      ->setCellValue('I'.$i, $personasActividad['Actividad']['poblaciones'])
      //->setCellValue('J'.$i, $personasActividad['Ubicacion']['id'])
      ->setCellValue('K'.$i, $personasActividad['Actividad']['comunas'])
      ->setCellValue('L'.$i, $personasActividad['Actividad']['corregimiento'])
      ->setCellValue('M'.$i, $personasActividad['Actividad']['vereda'])
      ->setCellValue('N'.$i, $personasActividad['Actividad']['lugar'])
      ->setCellValue('O'.$i, $personasActividad['Actividad']['direccion'])
      //->setCellValue('P'.$i, $personasActividad['Responsable']['nombres'])
      ->setCellValue('Q'.$i, $personasActividad['Actividad']['dimension'])
      ->setCellValue('R'.$i, $personasActividad['Actividad']['pro_asociado'])
      ->setCellValue('S'.$i, $personasActividad['Actividad']['producto1'])
      ->setCellValue('T'.$i, $personasActividad['Actividad']['producto2'])
      ->setCellValue('U'.$i, $personasActividad['Actividad']['num_producto'])
      ->setCellValue('V'.$i, $personasActividad['Actividad']['anexo'])
      ->setCellValue('W'.$i, $personasActividad['Actividad']['actividad_dir'])
      ->setCellValue('X'.$i, $personasActividad['Persona']['id'])
      ->setCellValue('Y'.$i, $personasActividad['Persona']['tipoidoc'])
      ->setCellValue('Z'.$i, $personasActividad['Persona']['identificacion'])
      ->setCellValue('AA'.$i, $personasActividad['Persona']['nombres'])
      ->setCellValue('AB'.$i, $personasActividad['Persona']['apellidos'])
      ->setCellValue('AC'.$i, $personasActividad['Persona']['fechanac'])
      ->setCellValue('AD'.$i, $personasActividad['Persona']['edad'])
      ->setCellValue('AE'.$i, $personasActividad['Persona']['genero'])
      ->setCellValue('AF'.$i, $personasActividad['Persona']['otrogenero'])
      ->setCellValue('AG'.$i, $personasActividad['Persona']['preferencia'])
      ->setCellValue('AH'.$i, $personasActividad['Persona']['etnia'])
      //->setCellValue('AI'.$i, $personasActividad['Estudio']['estudio'])
      ->setCellValue('AJ'.$i, $personasActividad['Persona']['otroestudio'])
      ->setCellValue('AK'.$i, $personasActividad['Persona']['profesion'])
      ->setCellValue('AL'.$i, $personasActividad['Persona']['poblacion'])
      //->setCellValue('AM'.$i, $personasActividad['Poblacion']['poblacion'])
      ->setCellValue('AN'.$i, $personasActividad['Persona']['discapacidad'])
     ->setCellValue('AO'.$i, $personasActividad['Persona']['zona'])
      ->setCellValue('AP'.$i, $personasActividad['Persona']['vereda'])
      ->setCellValue('AQ'.$i, $personasActividad['Persona']['comuna'])
      ->setCellValue('AR'.$i, $personasActividad['Persona']['corregimiento'])
      ->setCellValue('AS'.$i, $personasActividad['Persona']['direccion'])
      ->setCellValue('AT'.$i, $personasActividad['Persona']['celular'])
      ->setCellValue('AU'.$i, $personasActividad['Persona']['telefono'])
      ->setCellValue('AV'.$i, $personasActividad['Persona']['correo'])
      ->setCellValue('AW'.$i, $personasActividad['Persona']['ocupacion'])
      ->setCellValue('AX'.$i, $personasActividad['Persona']['cargo'])
      //->setCellValue('AY'.$i, $personasActividad['Aseguradora']['aseguradora'])
      ->setCellValue('AZ'.$i, $personasActividad['Persona']['regimen'])
      ->setCellValue('BA'.$i, $personasActividad['Persona']['perteneceorganizacion'])
      ->setCellValue('BB'.$i, $personasActividad['Persona']['organizacion'])
      //->setCellValue('BC'.$i, $personasActividad['Sociedad']['tiposociedad'])
      //->setCellValue('BD'.$i, $personasActividad['Sector']['tiposector'])
      ->setCellValue('BE'.$i, $personasActividad['Persona']['fecharegistro'])  
     
     
             
              
                
                  ;
              $i++; 

}
 
$objPHPExcel->getActiveSheet()->setTitle('Participaciones_CB');
$objPHPExcel->setActiveSheetIndex(0);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Actividades_Personas.xlsx"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
?>