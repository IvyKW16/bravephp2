<?php

echo "<h2>ARRAYS</h2>";

echo "<h4>Index Arrays</h4>";

$languages= array("Ruby", "Python", "PHP", "Java");

$languages[0]="Ruby";
$languages[1]="Python";
$languages[2]="PHP";
$languages[3]="Java";

#Sorting the array

print_r($languages);
echo "<br>";

#Ascending Order
sort ($languages);
print_r($languages);
echo "<br>";

#Descending Order
rsort ($languages);
print_r($languages);

echo "<hr>";

echo "<h4>Associative Arrays</h4>";

$marks= array("Peter"=>45,"John"=>67,"Hellen"=>56);

$marks["Peter"]=45;
$marks["John"]=56;
$marks["Hellen"]=67;

#Sorting the array

print_r($marks);

#Ascending Order (by value)
asort ($marks);
print_r($marks);
echo "<br>";

#Descending Order (by value)
arsort ($marks);
print_r($marks);
echo "<br>";

#Ascending Order (by key)
ksort ($marks);
print_r($marks);
echo "<br>";

#Descending Order (by key)
krsort ($marks);
print_r($marks);

echo "<hr>";


echo "<h4>Multi-Dimensional Arrays</h4>";

$contacts= array(
    array(
    "name"=> "John Doe",
    "email" => "johndoe@gmail.com",
    "pnumber" => "0712345678"
   ),

   array(
    "name"=> "Kane Kamau",
    "email" => "KaneKamau@gmail.com",
    "pnumber" => "0721345678"
   ),

   array(
    "name"=> "Lew Christ",
    "email" => "Lewchrist@gmail.com",
    "pnumber" => "0731345678"
   ),

   array(

    "name"=> "Aaron Keith",
    "email" => "aaronkeith@gmail.com",
    "pnumber" => "0741345678"
    )
);

echo "Email for John is".$contacts[0]['email'];
echo "<hr>";

#Indexed array

foreach ($languages as $value) {
    echo $value . "<br>";
}

foreach ($marks as $key => $value){
    echo $key."marks is:".$value."<br>";
}

?>
