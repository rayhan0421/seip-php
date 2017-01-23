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

<form action="" >
    <input type="text" name="search" value="" autofocus/>
    <input  type="submit" value="Search"/>
</form>
<h1>student list</h1>
<hr/>

<?php

if(isset($_GET['search'])){

    echo "Search :........<br/>";
    $student->setData($_GET);

    $sdata = $student->search();

   foreach ($sdata as $value){

    ?>

           <li><a href="show.php?id=<?php echo $value['id']; ?>"> <?php echo $value['title']; ?> </a> </li>

<?php
   }
}

$student = $student->index();
$sel = 0;


?>

<hr/>
<a href="pdf.php">download as pdf</a> /<a href="xl.php">dowmload as excel</a>
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
        <td><a href="show.php?id=<?php echo $value['id']; ?>">views details</a> / <a href="edit.php?id=<?php echo $value['id']; ?>">edit</a> </td>
    </tr>

    <?php } ?>




</table>



</body>
</html>