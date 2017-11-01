<?php
include("api.php");

    $value = mysqli_real_escape_string($con, $_POST["value"]);
    $query = "UPDATE list SET ".$_POST["column_name"]."='".$value."' WHERE itemId = '".$_POST["id"]."'";
    if(mysqli_query($con, $query))
    {
        echo 'Data Updated';
    }

?>