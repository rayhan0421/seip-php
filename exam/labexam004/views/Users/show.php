<?php

include "../../vendor/autoload.php";

use App\Users\Users;

$users= new Users();
$users->setData($_GET);
$user = $users->show();

$sl=1;
   session_start();
?>

<a href="create.php" >add new</a>
<a href="index.php"> Users List </a>
<hr/>
<table width="60%">
    <tr>
        <td>Serial</td>
        <td>Name</td>
        <td>email</td>
        <td>gender</td>
        <td>Created_at</td>
        <td>Action</td>
    </tr>

        <tr>
            <td><?php echo $sl;?></td>
            <td> <?php echo $_SESSION['name'] =$user['name'];  ?></td>
            <td><?php echo $_SESSION['email']= $user['email'];  ?></td>
            <td><?php echo $_SESSION['gender']= $user['gender'];  ?></td>
            <td><?php echo $user['created_at'];  ?></td>
            <td> <a href="delete.php?id=<?php echo $user['id']; ?>"> delete </a> /<a href="create.php?id=<?php echo $user['id']; ?>">edit </a></td>
        </tr>

</table>