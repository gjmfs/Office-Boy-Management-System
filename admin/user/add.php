<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <?php
    include '../config.php';
    if(isset($_POST['submit'])){
        $username=$_POST['userName'];
        $password=$_POST['password'];

        $exist="select * from user where uName='$username' and uPassword='$password'";
        $result=$connection->query($exist);
        if($result->num_rows>0){
            echo "user already exist";
        }else{
            $addUser="insert into user(uName,uPassword) values('$username','$password')";
            $result=$connection->query($addUser);
            if($result->num_rows>0){
                echo "user registration successfull";
            }else{
                echo "an error occured while creating user account";
            }
        }
    }
    ?>
</head>
<body>
<?php include './nav.php'; ?> 
<div class="container">
<form action='./add.php' method="POST">
  <div class="mb-3">
    <label  class="form-label">User Name</label>
    <input type="text" class="form-control" name="userName">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>