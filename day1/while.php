<?php

//Guess the number game

$name = readline("enter your name:  \n");
$number = rand(1,20);

$chances = 3;
$guess;
$attempt =0;

while ($chances >0){
    $attempt++;
    $chances--;
    $guess = (int)readline("enter number (1-20):  \n");
    var_dump($guess);

    if($guess < $number){
        echo "Your number is lower\n";
    }
    elseif($guess > $number){
        echo "Your number is higher\n";
    }
    else{
        break;
    }
}

echo "#+++++++++++++++++++++++++++++++++++++++++++++++++++++#\n\n";

if ($guess != $number){
    echo "Sorry, ". $name. " you could not get it. the number was ". $number. "\n\n";
}
elseif ($guess == $number){
    echo "CoNgRa!!!! ". $name. "YOU GOT iT in ". $attempt. " attempt(s) ". "yes the number is ". $number. "\n\n";
}
else{
    echo"please ensure your input is correct\n";
}


?>