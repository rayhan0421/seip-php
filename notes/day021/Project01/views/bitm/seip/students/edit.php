<?php
include ("../../../../vendor/autoload.php");

use App\bitm\seip\students\students;

echo "<hr/>";



$student = new students();

$student->setData($_GET);
 $data= $student->show();
?>
<html>

<head>

    <title>Student Information</title>
</head>
<body>

<fieldset>

    <legend>update student information</legend>
     <form action="update.php" method="post">

         <input type="text" name="title" value="<?php echo $data['title']; ?>" />
         <input type="hidden" name="id" value="<?php if(isset($_GET['id'])){ echo $_GET['id']; } ?>" />
         <input type="submit" value="update" />

     </form>
</fieldset>

</body>
</html>