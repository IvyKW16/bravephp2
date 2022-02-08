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

        while ($row=mysqli_fetch_array($results)){
          echo " ". $id = $row ['id'];
          echo " ". $firstName = $row ['firstName'];
          echo " ". $secondName = $row ['secondName'];
          echo "<a href='update.php?id=".$row['id']."'><button>Update</button></a>";
          echo "<a href='delete.php?id=".$row['id']."'><button>Delete</button></a>";
          echo "<hr>";
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