<?php
include ("../../../../vendor/autoload.php");
use App\bitm\seip\students\students;
$student = new students();
$student->setdata($_GET);

if(isset($_GET['page'])){
    $currentpage = $_GET['page']-1;
}else{
    $currentpage = 0;
}

?>
<html>

<head>
    <title>
        student list
    </title>

</head>
<body>
<form action="">
    <input type="text" name="keyword">
    <input type="submit" value="search">
</form>
<h1>student list</h1>
<hr/>

<?php
if(isset($_GET['keyword'])){
$keyword = $_GET['keyword'];
}


$student = $student->search($tolalrows,$perpage,$currentpage,$offset,$keyword);


$totalpage =  ceil($tolalrows/$perpage);

$sel = $offset;
?>
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
            <td><?php echo $sel ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><a href="show.php?id=<?php echo $value['id']; ?>">views details</a> / <a href="edit.php?id=<?php echo $value['id']; ?>">edit</a> </td>
        </tr>

    <?php } ?>




</table>
<hr/>
<?php
for($i=1;$i<=$totalpage;$i++){
    ?>
    <a href="search.php?keyword=<?php echo $keyword; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php
}

?>

<hr/>




</body>
</html>