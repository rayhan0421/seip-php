<?php

include "../../vendor/autoload.php";

use App\Users\Users;

$users= new Users();
$users = $users->index();


$se=0;

?>


<h1> Users List </h1>

<a href="create.php" >add new</a>
<a href="index.php"> Users List </a>
<hr/>
<?php

session_start();

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
<hr/>
<table width="40%">
<tr>
    <td>Serial</td>
    <td>Name</td>
     <td>Action</td>
</tr>
 <?php  foreach ($users as $user){ $se++ ?>
<tr>
    <td><?php echo $se;?></td>
    <td> <?php echo $user['name'];  ?></td>
    <td> <a href="show.php?id=<?php echo $user['id']; ?>"> details </a> /<a href="delete.php?id=<?php echo $user['id']; ?>"> delete </a> </td>
</tr>
 <?php } ?>

</table>