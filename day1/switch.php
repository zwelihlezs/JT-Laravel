<?php

//switch through day of the week and get a day's instructions
$day = "Friday";

switch($day){
    case "Sunday":
        echo"Happy Sunday, go to church";
        break;

    case "Monday":
        echo"Go Back to work";
        break;
    
    case "Tuesday":
        echo"Take out trash";
        break;

    case "Wednesday":
        echo"mhh get some whacky wednesday burger";
        break;

    case "Thursday":
        echo"put in some work in your project";
        break;

    case "Friday":
        echo"Time to relax and have some fun";
        break;

    case "Saturday":
        echo"Take care of the garden and wash the car";
        break;

    Default:
        echo"What day is it Today???";
        break;
}
?>