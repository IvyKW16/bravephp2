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

echo "<hr>";


if (isset($_POST["submit2"])){
    $adm_doctor_name=$_POST["Dname"];
    $adm_number=$_POST["Admnumber"];
    $adm_date=$_POST["DOA"];
    $ward_unitno=$_POST["WUN"];
    $hosp_profile=$_POST["accountlink"];
    $adm_details=$_POST["admissiondetails"];
    $medical_history=$_POST["file"];
    $docs_comments=$_POST["aoi"];

echo "<h3>Admission Details</h3>";
    echo "Admission Doctor's name: $adm_doctor_name  <br>";
    echo "Admission Number: $adm_number <br>";
    echo "Date of Admission: $adm_date <br>";
    echo "Ward Unit and Number: $ward_unitno <br>";
    echo "Patient's Hospital Profile (link): $hosp_profile<br>";
    echo "Admission Details: $adm_details <br>";
    echo "Medical History/ Files (file): $medical_history <br>";
    echo "Doctor's Comments: $docs_comments <br>";
}
else {
    echo "Kindly fill this form";
}

?>
