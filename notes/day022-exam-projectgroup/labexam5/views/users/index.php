<?php
include ("../../vendor/autoload.php");
use App\users\Users;

$users = new Users();
$sl=1;

/**
 * Created by PhpStorm.
 * User: Web App Develop PHP
 * Date: 1/25/2017
 * Time: 9:54 AM
 */

?>


<html xmlns="http://www.w3.org/1999/html">

<head>
    <title>User Hobbies</title>
</head>
<body></body>
<h1> User hobbeis List</h1>
<form action="search.php">
<input type="text" name="keyword" value=""/>
    <input type="submit" value="search">
</form>
<hr/>
<a href="create.php" >add new</a>
<table width="50%">
 <tr>
     <td>Serial</td>
     <td>Name</td>
     <td> Hobbies </td>
     <td>Action</td>
 </tr>

 <?php foreach($users->index() as $user){ ?>

     <tr>
         <td> <?php echo $sl++ ?> </td>
         <td> <?php echo $user['name'] ?> </td>
         <td> <?php echo $user['hobbies'] ?> </td>
         <td><a href="edit.php?id=<?php echo $user['id']; ?> "> Edit</a> / <td><a href="delete.php?id=<?php echo $user['id']; ?> "> delete</a>  </td>
     </tr>

<?php
}
    ?>
</table>

</body>


</html>
