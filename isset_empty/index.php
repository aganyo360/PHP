<?php

// Arrays
// $foods = array("Apples", "orange","banana", "coconut");
// array_push($foods, "Mango", "pineapples");
// foreach($foods as $food){
//     echo $food. "<br>";
// }

// echo count($foods)

// $username = 'big';
// if(isset($username)){
//     echo "the variable is set";
// }
// else{
//     echo "the variable is not set";
// }
// !

// $username = "";
// if(empty($username)){
//     echo "the variable is empty";
// }
// else{
//     echo "the variable is not empty";
// }
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post">
    <label for="">username:</label> <br>
    <input type="text" name="username"><br>
    <label for="">password:</label> <br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Log in">
    </form>
 </body>
 </html>

 <?php
 
  foreach($_POST as $key=> $value){
    echo "{$key} = {$value}  <br>";
    
  }

// if(isset($_POST["login"])){
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     if(empty($username)){
//         echo "username is empty";
//     }
//     elseif(empty($password)){
//         echo "password is missing";
//     }
//     else{
//         echo "Hello {$username}";
//     }
// }
 
 
 ?>