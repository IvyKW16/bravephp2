<?php


// 1. php script begins with < ? and ends with ? >
// 2. every statement must end with a semi-colon;
// 3. comments in PHP we use // or # or */
// 4. php is very case and name sensitive

//VARIABLE-They are stores for data.

$name = "";
$first_name = "Meg";
$_second_name = "Njeri";
$otherName = "Yuili";
$car="Mercedez Benz";

print "<h3>Introduction to PHP</h3>";

echo "<br>";

echo "My name is $first_name";

echo "<br>";

echo"I enjoy driving a $car";

echo "<br>";

#PHP CONSTANT

define("PROFIT",200);
define("WEBSITE_URL", "https://www.google.com/");

echo "The profit constant for the week" .PROFIT;
echo "<br>";
echo "Search for something here" .WEBSITE_URL;

//DATA TYPES
#INTEGER: A WHOLE NUMBER THAT DOESNT HAVE A DECIMAL POINT
$a=3453;
var_dump($a);
echo "<br>";
$b=-90;
var_dump($b);

#Floting point

$c=1.456390;
echo "<br>";
var_dump($c);

echo "<br>";
$d=10.2e3;
var_dump($d);

echo "<br>";

#BOOLEAN
$e=true;
var_dump($e);

echo"<br>";
$f=false;
var_dump($f);

echo "<br>";

#ARRAYS
$colors= array("Red", "Green", "Blue", "Purple", "Indigo");
var_dump($colors);

echo "<br>";

#STRINGS
$grade="A";
var_dump($grade);
echo "<br>";
var_dump($first_name);

echo "<br>";

$sentensi= "The quick brown fox jumped over the lazy dog";
var_dump($sentensi);

echo "<br>";

//length of string
echo strlen($sentensi);
echo "<br>";

//number of words
echo str_word_count($sentensi);
echo "<br>";

//reversing a string
echo strrev($sentensi);
echo "<br>";

echo strrev($first_name);
echo "<br>";


/*
 NAMING CONVENTIONS OF DECLARATIONS VARIABLES:
1. Begins with a dollar sign followed by name.
2. Begins with a letter or _ .
3. Cannot begin with a number.
4. Cannot contain spaces.
 */

?>