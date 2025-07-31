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
foreach ($actividades as $actividad){
  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A1','id')
              ->setCellValue('B1','fecha')
              ->setCellValue('C1','hora_inicio')
              ->setCellValue('D1','hora_fin')
              ->setCellValue('E1','tema')
              ->setCellValue('F1','zona')
              ->setCellValue('G1','comuna')
              ->setCellValue('H1','barrio')
              ->setCellValue('I1','vereda_barrio')
              ->setCellValue('J1','comuna')
              ->setCellValue('K1','corregimiento')
              ->setCellValue('L1','lugar')
              ->setCellValue('M1','direccion')                                          
              ->setCellValue('N1','Responsable')
              ->setCellValue('O1','dimension')
              ->setCellValue('P1','pro_asociado')
              ->setCellValue('Q1','pro_asociado')
              ->setCellValue('R1','pro_asociado')
              ->setCellValue('S1','poblacion')
              ->setCellValue('T1','grupo asistente')
              ->setCellValue('U1','tipoproceso')
              ->setCellValue('V1','metodologia')
              ->setCellValue('W1','caracteristicasesion')
              ->setCellValue('X1','caracteristicasesion')
              ->setCellValue('Y1','objetivouno')
              ->setCellValue('Z1','objetivodos')
              ->setCellValue('AA1','objetivotres')
              ->setCellValue('AB1','contobjetivo')

              ->setCellValue('AC1','Objetivo general')
              ->setCellValue('AD1','Objetivo especifico')
              ->setCellValue('AE1','otro tipo')
              ->setCellValue('AF1','premisauno')
              ->setCellValue('AG1','premisados')
              ->setCellValue('AH1','premisatres')
              ->setCellValue('AI1','contri_premisas')

              ->setCellValue('AJ1','perspectiva uno')
              ->setCellValue('AK1','perspectiva dos')
              ->setCellValue('AL1','contri_pespectiva')

              ->setCellValue('AM1','enfoque uno')
              ->setCellValue('AN2','enfoque dos')
              ->setCellValue('AO1','enfoque tres')
              ->setCellValue('AP1','enfoque cuatro')
              ->setCellValue('AQ1','contri_enfoque')

              ->setCellValue('AR1','compromisos')
              ->setCellValue('AS1','aportes')
              ->setCellValue('AT1','conclusiones')
              ->setCellValue('AU1','externo')
              ->setCellValue('AV1','cargo')
              ->setCellValue('AW1','organizacion')
              ->setCellValue('AX1','tipo_org')
              ->setCellValue('AY1','poblaciones')
              ->setCellValue('AZ1','num_producto')
              ->setCellValue('BA1','anexo')
              ->setCellValue('BB1','directorio')
              ->setCellValue('BC1','fecha_registro')

              


             ;       

  
  $objPHPExcel->setActiveSheetIndex(0)
              ->setCellValue('A'.$i, $actividad['Actividad']['id'])
              ->setCellValue('B'.$i, $actividad['Actividad']['fecha'])
              ->setCellValue('C'.$i, $actividad['Actividad']['hora_inicio'])
              ->setCellValue('D'.$i, $actividad['Actividad']['hora_fin'])
              ->setCellValue('E'.$i, $actividad['Actividad']['tema'])
              ->setCellValue('F'.$i, $actividad['Ubicacion']['zona'])
              ->setCellValue('G'.$i, $actividad['Ubicacion']['tipo1'])
              ->setCellValue('H'.$i, $actividad['Ubicacion']['comuna'])
              ->setCellValue('I'.$i, $actividad['Ubicacion']['barrio'])
              ->setCellValue('J'.$i, $actividad['Actividad']['vereda'])
              ->setCellValue('K'.$i, $actividad['Actividad']['comunas'])
              ->setCellValue('L'.$i, $actividad['Actividad']['corregimiento'])
              ->setCellValue('M'.$i, $actividad['Actividad']['lugar'])
              ->setCellValue('N'.$i, $actividad['Actividad']['direccion'])                                          
              ->setCellValue('O'.$i, $actividad['Responsable']['nombres'])
              ->setCellValue('P'.$i, $actividad['Actividad']['dimension'])
              ->setCellValue('Q'.$i, $actividad['Actividad']['pro_asociado'])
              ->setCellValue('R'.$i, $actividad['Actividad']['producto1'])
              ->setCellValue('R'.$i, $actividad['Actividad']['producto2'])
              ->setCellValue('S'.$i, $actividad['Poblacion']['poblacion'])
              ->setCellValue('T'.$i, $actividad['Actividad']['nombregrupo'])
              ->setCellValue('U'.$i, $actividad['Actividad']['tipoproceso'])
              ->setCellValue('V'.$i, $actividad['Actividad']['metodologia'])
              ->setCellValue('W'.$i, $actividad['Actividad']['caracteristicasesion'])
              ->setCellValue('X'.$i, $actividad['Actividad']['otrocual'])
              ->setCellValue('Y'.$i, $actividad['Actividad']['objetivouno'])
              ->setCellValue('Z'.$i, $actividad['Actividad']['objetivodos'])
              ->setCellValue('AA'.$i, $actividad['Actividad']['objetivotres'])
              ->setCellValue('AB'.$i, $actividad['Actividad']['contobjetivo'])
              ->setCellValue('AC'.$i, $actividad['Actividad']['objactividad'])
              ->setCellValue('AD'.$i, $actividad['Actividad']['objetivoespecifico'])
              ->setCellValue('AE'.$i, $actividad['Actividad']['otrotipo'])
              ->setCellValue('AF'.$i, $actividad['Actividad']['premisauno'])
              ->setCellValue('AG'.$i, $actividad['Actividad']['premisados'])
              ->setCellValue('AH'.$i, $actividad['Actividad']['premisatres'])
              ->setCellValue('AI'.$i, $actividad['Actividad']['contpremisa'])
              ->setCellValue('AJ'.$i, $actividad['Actividad']['perspectivauno'])
              ->setCellValue('AK'.$i, $actividad['Actividad']['perspectivados'])
              ->setCellValue('AL'.$i, $actividad['Actividad']['contperspectiva'])
              ->setCellValue('AM'.$i, $actividad['Actividad']['enfoqueuno'])
              ->setCellValue('AN'.$i, $actividad['Actividad']['enfoquedos'])
              ->setCellValue('AO'.$i, $actividad['Actividad']['enfoquetres'])
              ->setCellValue('AP'.$i, $actividad['Actividad']['enfoquecuatro'])
              ->setCellValue('AQ'.$i, $actividad['Actividad']['contribucionenfoque'])
              ->setCellValue('AR'.$i, $actividad['Actividad']['compromiso'])
              ->setCellValue('AS'.$i, $actividad['Actividad']['aportes'])
              ->setCellValue('AT'.$i, $actividad['Actividad']['conclusiones'])
              ->setCellValue('AU'.$i, $actividad['Actividad']['externo'])
              ->setCellValue('AV'.$i, $actividad['Actividad']['cargo'])
              ->setCellValue('AW'.$i, $actividad['Actividad']['organizacion'])
              ->setCellValue('AX'.$i, $actividad['Actividad']['tipoorganizacion'])
              ->setCellValue('AY'.$i, $actividad['Actividad']['poblaciones'])
              ->setCellValue('AZ'.$i, $actividad['Actividad']['num_producto'])
              ->setCellValue('BA'.$i, $actividad['Actividad']['anexo'])
               ->setCellValue('BB'.$i, $actividad['Actividad']['actividad_dir'])
              ->setCellValue('BC'.$i, $actividad['Actividad']['fecharegistro'])
            



              






              ;
              $i++; 

}
 
$objPHPExcel->getActiveSheet()->setTitle('Actividades_CB');
$objPHPExcel->setActiveSheetIndex(0);
 
//header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Actividades.xlsx"');
//header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');


exit;
?>