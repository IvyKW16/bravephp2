<?php

include "connect.php";

#REQUEST CAN BE USED TO FETCH INFORMATION USED THE GET OR POST METHOD
if (isset($_POST["submit"])){
    $firstName=$_POST["firstName"];
    $secondName=$_POST["secondName"];
}

    $sql = "INSERT INTO `detail`( `firstName`, `secondName`) VALUES ('[$firstName]','[$secondName]')";
    $result = mysqli_query($link, $sql);

    if ($result){
        echo "YOUR RECORD HAS BEEN ADDED SUCCESSFULLY";
    }
    else {
        echo "ERROR ADDING A RECORD".mysqli_error($link);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST METHOD</title>
</head>
<body>

<form action="postmethod.php" method="post">
    <div>
        <label>First Name</label>
        <input type="text" name="firstName">
    </div>

    <div>
        <label>Second Name</label>
        <input type="text" name="secondName">
    </div>

    <input type="submit" name="submit" value="submit">

</form>

</body>
</html>
