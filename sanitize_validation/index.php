<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="">username:</label>    <br>
    <input type="text" name="username"><br>
    <label for="">email:</label><br>
    <input type="email" name="email"> <br>
    <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>
<?php
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
    if(empty($email)){
        echo "invalid email";
    }
    else{
        echo "your email is  $email" . "<br>";
    }
    if(empty($username)){
        echo "invalid username" ;
    }
    else{
        echo "welcome $username";
    }
}




?>