<?php

$link = mysqli_connect(hostname: "localhost" , username: "root" , password: "" , database:"brave");

if ($link == true){
    echo "SERVER SUCCESSFULLY CONNECTED";
}
else{
    echo "ERROR CONNECTING TO SERVER" .mysqli_connect_error();
}
?>
