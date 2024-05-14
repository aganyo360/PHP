<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">username</label> <br>
        <input type="text" name="username"><br>
        <label for="">password:</label> <br>
        <input type="password" name="password"> <br>
        <label for="">Confirm password</label> <br>
        <input type="password" name="password2"><br>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>
<?php
if(isset($_POST["register"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    if(empty($username)){
        echo "username is empty";
    }
    elseif(empty($password)){
        echo "password is empty";
    }
    elseif(empty($password2)){
        echo "password2 is empty";
    }
    else{
        echo "Welcome back {$username} ";
    }
}


?>
