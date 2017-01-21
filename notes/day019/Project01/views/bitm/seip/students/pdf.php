<pre>
<?php
//include_once ("../../../../vendor/mpdf/mpdf/mpdf.php");
include ("../../../../vendor/autoload.php");
use App\bitm\seip\students\students;
$student = new students();

$student = $student->index();

$trs= '';
$ser=0;
foreach ($student as $value):
    $ser++;
     $trs.="<tr>";

     $trs.= "<td>".$ser."</td>";

     $trs.= "<td>".$value['title']."</td>";
     $trs.= "<td>".$value['created_at']."</td>";
     $trs.="</tr>";
  endforeach;


$html = <<<EOD
<html>
<head>
<title>
Student List
</title>
</head>
<body>
<h1> Student List</h1>
<table border="1">
<tr>
<td> serial </td>
<td> Name </td>
<td> Date </td>
</tr>
$trs;
</table>
</body>
</html>

EOD;


$pdf_student =  new mPDF();

$pdf_student->WriteHTML($html);
$pdf_student->Output();



?>