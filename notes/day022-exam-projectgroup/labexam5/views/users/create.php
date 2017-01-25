<?php
include ("../../vendor/autoload.php");
use App\users\Users;

$users = new Users();

?>

<html>
<head>

</head>
<body>

<h1>Create User and hobbies</h1>
<hr/>
<a href="index.php">Return index List</a>

<br/>
<?php
session_start();

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}

?>
<br/>
<hr/>
<form action="store.php" method="post">
    <label>Name</label><input type="text" required name="name" autofocus/>
    <fieldset>
        <legend>What is Your Hobbies?</legend>
        <input type="checkbox" name="hobby[]" value="moviegoar" />Movie goar <br />
        <input type="checkbox" name="hobby[]" value="sleeping" />sleeping<br />
        <input type="checkbox" name="hobby[]" value="traveling" />traveling<br />
        <input type="checkbox" name="hobby[]" value="dancing" />dancing <br />
        <input type="checkbox" name="hobby[]" value="hunting" />Hunting<br />

    </fieldset>

   <input type="submit" />


</form>
</body>
</html>

