<?php
include("api.php");

$itemId = $_POST['id'];

$query = "DELETE FROM list WHERE itemId = ".$itemId;

if (mysqli_query($con, $query)) {
    echo 'Data Deleted';
}
