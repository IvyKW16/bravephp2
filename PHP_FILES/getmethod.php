<?php

#Get method is used for getting information from one page to another but it is a disadavantge because the collected information is displayed on the url.

if (isset($_GET["submit"])){
    $first_name=$_GET["fname"];
    $second_name=$_GET["lname"];

    echo "The first name picked is $first_name <br>";
    echo "The second name picked is $second_name <br>";
}
else {
    echo "Kindly fill this form";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET METHOD</title>
</head>
<body>

<form action="getmethod.php" method="get">
   <div>
    <label>First Name</label>
    <input type="text" name="fname">
   </div>

    <div>
        <label>Last Name</label>
        <input type="text" name="lname">
    </div>

    <input type="submit" name="submit" value="submit">

</form>

</body>
</html>