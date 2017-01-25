<?php
include ("../../vendor/autoload.php");
use App\users\Users;

$users = new Users();
$users->setData($_GET);

$user = $users->show();



echo "<pre>";
$hob = $user[0]['hobbies'];

$s = explode(",",$hob);





?>



<html>
<head>
    <title> </title>
</head>

<body>
<hr/>
<form action="update.php" method="post">
    <label>Name</label><input type="text" required name="name" value="<?php echo $user[0]['name'] ?>"/>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <fieldset>
        <legend>What is Your Hobbies?</legend>

        <?php

        foreach ($s as $d){
            ?>

            <input type="checkbox" name="hobby[]" checked value="<?php echo $d; ?>" /><?php echo $d; ?><br />

       <?php  } ?>



    </fieldset>

    <input type="submit" />


</form>


</body>
</html>
