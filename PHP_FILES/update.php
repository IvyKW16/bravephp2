<?php
include "connect.php";

if (isset($_POST["submit"]) and !empty ($_POST["id"])){
    $id = $_POST ["id"];

    $sql = "UPDATE `detail` SET `firstName`='$firstName',`secondName`='$secondName' WHERE id=$id";

    $results=mysqli_query($link, $sql);

    if ($results){
        echo "you updated the record";
        header ("location:select.php");
    }
    else{
        echo "Error executing your query $sql".mysqli_error($link);
    }
}
else{
    echo "Try updating a record";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPDATE</title>
</head>
<body>

<div>
    <form action="update.php" method="post">

        <div>
            <label>Are you sure you want to update this record?</label>
            <input type="text" name="id" value="<?php echo $_GET['id']?>">
        </div>
        <div>
            <input type="submit" value="YES" name="submit">
            <a href="select.php">NO</a>
        </div>

    </form>
</div>

</body>
</html>
