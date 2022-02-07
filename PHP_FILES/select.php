<?php

include "connect.php";

#Query
$sql = "SELECT * FROM `detail` ";

#Checking Execution
$results = mysqli_query($link, $sql);

if ($results){
    #data in database
    $data = mysqli_num_rows($results);

    if ($data>0){
        echo "<h3>Table Details</h3>";

        $row = mysqli_fetch_array($results);
        while ($row){
            $id = $row ['id'];
            $firstName = $row ['firstName'];
            $secondName = $row ['secondName'];
        }
    }
    else{
        echo "No data found on the database";
    }

}
else{
 echo "ERROR EXECUTING QUERY $sql" .mysqli_error($link) ;
}


?>