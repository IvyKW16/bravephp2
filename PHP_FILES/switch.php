<?php

echo "<h2>THE SWITCH STATEMENT</h2>";

$day= "Monday";

switch ($day){
    case "Monday":
        echo "Today is Monday, Learn PHP";
        break;
    case "Tuesday":
        echo "Today is Tuesday, Get some JS done";
        break;
    case "Wednesday":
        echo "Today is Wednesday, Kotlin for android";
        break;
    case "Thursday":
        echo "Today is Thursday, Front end bootstrap";
        break;
    default:
        echo "Today is a Weekend, Take a break";
}

echo "<hr>";

echo "<h2>LOOPS IN PHP</h2>";

$b = 1;
while ($b<=10){
    $b++;
    echo "The number is $b <br>";
}

echo "<hr>";

$a= 0;
do{
    $a++;
    echo "The value of a is $a <br>";
}
while ($a<12);

echo "<hr>";

for ($c=1; $c<=10; $c++){
    echo "The value of c is $c <br>";
}

echo "<hr>";


echo "<h2>WORK ASSIGNMENT</h2>";
echo "<h2>Even Numbers</h2>";

#while loop
$even= 0;
while ($even<=50) {
    $even+=2;
    echo "The number is $even <br>";
}

echo "<hr>";

#do while loop
$even= 0;
do{
    $even+=2;
    echo "The value of even is $even <br>";
}
while ($even<=50);

echo "<hr>";

for ($even=0; $even<=50; $even+=2){
    echo "The value of even is $even <br>";
}

echo "<hr>";

echo "<h2>Odd Numbers</h2>";

#while loop
$odd= 1;
while ($odd<=50) {
    $odd +=2;
    echo "The number is $odd <br>";
}

echo "<hr>";

#do while loop
$odd= 1;
do{
    $odd+=2;
    echo "The value of even is $odd <br>";
}
while ($odd<=50);

echo "<hr>";

for ($odd=1; $odd<=50; $odd+=2){
    echo "The value of odd is $odd <br>";
}

echo "<hr>";

echo "<h2>Star Pattern</h2>";

for ($star=1; $star<=8; $star++){
    for($pat=1; $pat<$star; $pat++){
        echo "*";
    }
    echo "<br>";
}

?>