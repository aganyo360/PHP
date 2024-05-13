<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="">Enter a number to count from:</label>    <br>
    <input type="number" name="number"> <br>
    <input type="submit" name="submit" value="Start"> <br>
    </form>
</body>
</html>
<?php
// for loops will repeat some code a certain amoutn of times
$conter =$_POST["number"];

for ($i = $conter; $i>0; $i--) {
    echo "{$i}<br>" ;
}
// for ($i = 1; $i < 100; $i+=8) {
//     echo "{$i }<br>" ;
// }


?>

















