<?php
include "connect.php";

if (isset($_POST["submit"]) and !empty ($_POST["id"])){
    $id = $_POST ["id"];

    $sql = "DELETE FROM `detail` WHERE id=$id";

    $results=mysqli_query($link, $sql);

    if ($results){
        echo "you deleted the record";
        header ("location:select.php");
    }
    else{
        echo "Error executing your query $sql".mysqli_error($link);
    }
}
else{
    echo "Try deleting a record";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DELETE</title>
</head>
<body>

<div>
    <form action="delete.php" method="post">

        <div>
            <label>Are you sure you want to delete this record?</label>
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