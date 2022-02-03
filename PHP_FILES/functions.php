<?php

#Sum function
function getSum ($num1, $num2){
    $sum= $num1 + $num2;
    echo "The sum of $num1 and $num2 is $sum <br>";
}
getSum(num1:55 , num2:45);
getSum(num1:88 , num2:22);
getSum(num1:90 , num2:50);


echo "<hr>";

#Get Name function
function getName ($name){
    echo "Welcome to the page $name <br>";
}
getName(name:"Alice Wonderland");


echo "<hr>";

#Product function
function getProduct ($num1, $num2, $num3){
    $product= $num1 * $num2 * $num3;
    echo "The product of $num1 and $num2 and $num3 is $product <br>";
}

getProduct(num1:55 , num2:45 , num3:10);
getProduct(num1:88 , num2:22 , num3:2);
getProduct(num1:90 , num2:50 , num3:0);

?>
