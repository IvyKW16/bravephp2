<?php

#REQUEST CAN BE USED TO FETCH INFORMATION USED THE GET OR POST METHOD
if (isset($_REQUEST["submit"])){
    $full_name=$_REQUEST["full_name"];
    $email=$_REQUEST["email"];
    $phone_number=$_REQUEST["pnumber"];
    $designation=$_REQUEST["designation"];

    echo "Full name: $full_name <br>";
    echo "Email: $email <br>";
    echo "Phone Number: $phone_number <br>";
    echo "Designation: $designation <br>";
}
else {
    echo "<h3>Kindly fill this form</h3>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REQUEST METHOD</title>
</head>
<body>

<form action="requestmethod.php" method="post">
    <div>
        <label>Full Name</label>
        <input type="text" name="full_name">
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email">
    </div>

    <div>
        <label>Phone Number</label>
        <input type="tel" name="pnumber">
    </div>

    <div>
        <label>Designation</label>
        <input type="text" name="designation">
    </div>


    <input type="submit" name="submit" value="submit">

</form>

</body>
</html>
