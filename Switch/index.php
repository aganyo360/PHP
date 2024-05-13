<?php

$grade ="pi";
// switch($grade){
//     case "A":
//         echo " You did excellent";
//         break;
//     case "B":
//         echo " You did good";
//         break;
//     case "C":
//         echo " You did fair";
//         break;
//     case "D":
//         echo " You did poor";
//         break;
//     default:
//         echo "{$grade} is invalid";

// }






// getting date

$date = date("l");
$date = "Thursday";
// echo "$date"
switch($date){
    case "Monday":
        echo "I hate mondays";
        break;
    case "Tuesday":
        echo "I love Tuesdays";
        break;
    case "Wednesday":
        echo "I am into wedsnness";
        break;
    case "Thursday":
        echo "I hate thursday";
        break;
    case "Friday":
        echo "I hate mondays";
        break;
    default:
        echo "{$date} is invalid";
}

?>