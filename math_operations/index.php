<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter the radius of the circle</label> <br>
        <input type="text" name="r"><br>
        <br>
        <input type="submit" value="Calculate">
       
    </form>
    
</body>
</html>
<?php
$r = $_POST["r"];

$Circumference =null;
$Area =null;
$Circumference = pi()*2*$r;
$Circumference = round($Circumference, 2);
;$Area = pi()*($r**2);
echo $Circumference;
echo " <br> Area= {$Area}"
?>