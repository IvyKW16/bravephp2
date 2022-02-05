<?php

if (isset($_POST["submit1"])){
    $first_name=$_POST["fname"];
    $middle_name=$_POST["mname"];
    $sir_name=$_POST["sname"];
    $nationality=$_POST["nationality"];
    $dob=$_POST["DOB"];
    $gender=$_POST["gender"];
    $pnumber=$_POST["pnumber"];
    $email=$_POST["email"];
    $county=$_POST["county"];

    echo "<h3>Personal Details</h3>";
    echo "First Name: $first_name <br>";
    echo "Middle Name: $middle_name <br>";
    echo "Sir Name: $sir_name <br>";
    echo "Nationality: $nationality <br>";
    echo "Date Of Birth: $dob<br>";
    echo "Gender: $gender <br>";
    echo "Phone Number: $pnumber <br>";
    echo "Email: $email <br>";
    echo "County: $county <br>";
}
else {
    echo "Kindly fill this form";
}

?>