<?php
include ("../../../../vendor/autoload.php");
use App\bitm\seip\students\students;
$student = new students();

$student->setData($_GET);


$st=$student->show();

?>
<a href="index.php">return to index</a>
<table width="50%">
    <tr style="background-color: grey">
        <td>ID</td>
        <td>Title</td>
        <td>Action</td>

    </tr>




    <tr>
        <td><?php echo $st['id']; ?></td>
         <td><?php echo $st['title']; ?></td>
        <td><a href="show.php?id=<?php echo $st['id']; ?>">views details</a> </td>
    </tr>

