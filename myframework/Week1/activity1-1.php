<?php

$name = "Mike";
$age = 29;

$person = [$name, $age, "name" => $name, "age" => $age];

echo "My name is ".$name." and age is ".$age.".<br>"; 
echo 'My name is '.$name.' and age is '.$age.'.<br>';
echo "My name is ". $person[0] ." and age is ".$person[1].".<br>";
echo "My name is ". $person["name"] ." and age is ".$person["age"].".<br>";
$age = null;
echo "Age is {$age}";
// $age = null; puts nothing out
unset($name);
echo "Name is{$name}<br>";
// "Notice: Undefined variable" is the result


$pointsEarned = 105;

if($pointsEarned >= 0 && $pointsEarned <60){
    echo "Congrats! You recived an F!";
}elseif($pointsEarned >= 60 && $pointsEarned <70){
    echo "Congrats! You recived a D!";
}elseif($pointsEarned >= 70 && $pointsEarned <80){
    echo "Congrats! You recived a C!";
}elseif($pointsEarned >= 80 && $pointsEarned <90){
    echo "Congrats! You recived a B!";
}elseif($pointsEarned >= 90 && $pointsEarned <101){
    echo "Congrats! You recived an A!";
}elseif($pointsEarned >= 101){
    echo "Congrats! You recived an A plus ".($pointsEarned - 100)." extra credit points!<br>";
}

$colorArray = [0=>"Blue",1=>"Ocean Blue",2=>"Green",3=>"Lime Green", 4=>"Red",5=>"Dark Red",6=>"Purple",7=>"Royal Purple",8=>"Black",9=>"Gray"];

for($i =0; $i<10; $i++){
    echo "Color {$i} is {$colorArray[$i]}<br>";
};
?>