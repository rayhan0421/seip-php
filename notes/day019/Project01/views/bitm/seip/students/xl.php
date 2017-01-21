
<?php
error_reporting(E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors',TRUE);
ini_set('display_startup_errors',TRUE);
date_default_timezone_set("Asia/Dhaka");
include ("../../../../vendor/autoload.php");

use App\bitm\seip\students\students;
$student = new students();
$student = $student->index();
$excel = new PHPExcel();
$sl=0;
$counter = 5;
if(PHP_SAPI=='cli'){
die("example should run from browser");
}

$excel->getProperties()->setcreator("Rayhan")
       ->setlastModifiedby("Rayhan")
       ->setTitle("Student List")
       ->setSubject("student subject")
       ->setDescription("desc")
       ->setKeywords("office 1997")
       ->setCategory("test list");


$excel->setActiveSheetIndex(0)
      ->setCellValue("A1","SL")
    ->setCellValue("B1","Title")
    ->setCellValue("C1","created_at");


foreach ($student as $value){

    $sl++;
    $excel->setActiveSheetIndex(0)
        ->setCellValue("A".$counter,$sl)
        ->setCellValue("B".$counter,$value['title'])
        ->setCellValue("C".$counter,$value['created_at']);
    $counter++;

}




$excel->getActiveSheet()->setTitle("Studentlist");

$excel->setActiveSheetIndex(0);


header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment;filename="slist.xls"');
header("Cache-Control: max-age=0");


header("Expires: Sat, 26 Jul 2015 05:00:00 GMT");
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: public");
$objectwriter =  PHPExcel_IOFactory::createWriter($excel,"Excel2007");
$objectwriter->save("php://output");
exit();



