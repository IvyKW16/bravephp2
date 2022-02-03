<?php

#REQUEST CAN BE USED TO FETCH INFORMATION USED THE GET OR POST METHOD
if (isset($_POST["submit"])){
    $first_name=$_POST["fname"];
    $second_name=$_POST["lname"];

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
    <title>POST METHOD</title>
</head>
<body>

<form action="postmethod.php" method="post">
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
