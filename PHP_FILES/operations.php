<?php

$num1=12;
$num2=45;

#arithmetic operations

$sum= $num1+$num2;
$diff= $num1-$num2;
$prod= $num1*$num2;
$div= $num1/$num2;
$mod= $num1%$num2;

echo "the sum of $num1 & $num2 is $sum";
echo "<br>";

echo "the difference of $num1 & $num2 is $diff";
echo "<br>";

echo "the product of $num1 & $num2 is $prod";
echo "<br>";

echo "the division of $num1 & $num2 is $div";
echo "<br>";

echo "the modulus of $num1 & $num2 is $mod";
echo "<br>";

echo "<hr>";
#Assignment operators

$a=10;

echo "a is $a";
echo "<br>";

$a -=5;

echo "a is $a";
echo "<br>";

$a *=10;

echo "a is $a";
echo "<br>";

$a /=2;

echo "a is $a";
echo "<br>";

$a +=10;

echo "a is $a";
echo "<br>";

$a %=10;

echo "a is $a";
echo "<br>";

echo "<hr>";

#Increment and decrement operators

$b=10;

$b++;
echo "b is $b";
echo "<br>";

++$b;
echo "b is $b";
echo "<br>";

$b--;
echo "b is $b";
echo "<br>";

--$b;
echo "b is $b";
echo "<br>";

echo "<hr>";

#Comparison Operators

$age=14;

if ($age>18){
    echo "You are an adult";}
else{
    echo "You are a child";
}

echo "<br>";

if ($age>18){
    echo "You are an adult";}
elseif($age>12){
    echo "You are a teenager";}
else{
    echo "You are a child";
}

echo "<hr>";

#logic operators ( logical operators use: and(), or(||), xor)

if ($age>18 and $age<100){
    echo "You are an adult";}
elseif ($age>12 and $age<=18){
    echo "You are a teenager";}
elseif ($age>0 and $age<=12){
    echo "You are a child";}
else {
    echo "No such age";
}


$data= 100;

$data > 100 and $data < 500;

$data > 100 or $data < 500;

$data > 100 xor $data < 500;


echo "<hr>";

# A simple code that grades students
$marks=0;

if ($marks>69 and $marks<=100){
    echo "A";}
elseif ($marks>59 and $marks<=69){
    echo "B";}
elseif ($marks>49 and $marks<=59){
    echo "C";}
elseif ($marks>39 and $marks<=49){
    echo "D";}
elseif ($marks>=0 and $marks<=39){
    echo "Fail";}
else {
    echo "Invalid Input";
}

?>