<?php
 
App::import('Vendor','xtcpdf');
 
$pdf = new XTCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
 
$pdf->AddPage();
//*
if(!isset($html)){
$html = '<pre>
<h1>hello world</h1>
</pre><table border="1" cellpadding="0" cellspacing="0">';
 
foreach ( $usuarios as $usuario ){
    $html .= '<tr><td>'.$usuario['Usuario']['id'];
     $html .= '</td><td>'.$usuario['Documento']['tipo_doc'];
      $html .= '</td><td>'.$usuario['Usuario']['numero'];
       $html .= '</td><td>'.$usuario['Usuario']['nombres'].'</td></tr>';
}
$html.='</html>';
} //*/
$pdf->writeHTML($html, true, false, true, false, '');
 
//$pdf->lastPage();
 
echo $pdf->Output('files/test.pdf', 'D');