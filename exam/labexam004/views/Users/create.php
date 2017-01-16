<html>
<head>
    <title>lab exam 4 </title>
<style>
   input{
       padding: 5px;
       margin-bottom: 5px;
   }
 input[type="submit"]{
     margin-left: 200px;
 }

</style>
</head>
<body>
<a href="index.php"> Users List </a>
<hr/>
<?php
session_start();

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<h1>User Add</h1>
<hr/>

<form action="store.php" method="POST">
    <label>Name: </label> <input type="text" name="name" value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; } ?> " placeholder=" "/> <br/>
    <input type="hidden" value="<?php echo $_GET['id'];?>">
    <label>Email: </label> <input type="email" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?> " placeholder=" "/> <br/>
    <label>Password: </label> <input type="password" name="password" value="" placeholder=" "/> <br/>
    <label>Gender: </label>
    <label>Male</label> <input <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=="male" ){ echo "checked"; } ?>  type="radio" name="gender" value="male">
    <label>Female</label> <input  <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=="female"){ echo "checked"; } ?>  type="radio" name="gender" value="female">     <br/>

     <input type="submit" value="submit" />

</form>

</body>
</html>

<?php
session_destroy();
?>