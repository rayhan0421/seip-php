<?php
include ("../../../../vendor/autoload.php");
use App\bitm\seip\students\students;
$student = new students();


?>
<html>

<head>
    <title>
        student list
    </title>

</head>
<body>
<h1>student list</h1>
<hr/>

<?php

$student = $student->index();
$sel = 0;


?>

<table width="50%">
    <tr style="background-color: grey">
        <td>ID</td>
        <td>Title</td>
        <td>Action</td>

    </tr>

    <?php   foreach ($student as $value){
  $sel++;

     ?>



    <tr>
        <td><?php echo $sel; ?></td>
         <td><?php echo $value['title']; ?></td>
        <td><a href="show.php?id=<?php echo $value['id']; ?>">views details</a> </td>
    </tr>

    <?php } ?>




</table>

</body>
</html>