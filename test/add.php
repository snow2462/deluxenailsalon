<?php
include("api.php");

if (isset($_POST['done'])) {
    $id = mysqli_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['itemName']);
    $description = mysqli_escape_string($con, $_POST['description']);
    $price = mysqli_escape_string($con, $_POST['price']);
    $availability = mysqli_escape_string($con, $_POST['availability']);
    $checkItem = "SELECT * FROM list WHERE itemName = '" . $name . "'";
    $queryCheck = mysqli_query($con, $checkItem);
    if (mysqli_num_rows($queryCheck) > 0) {
        echo "Item has already existed in database";
    } else {
        mysqli_query($con, "INSERT IGNORE INTO list (`itemId`, `itemName`, `description`, `price`, `availability`)
                            VALUES('{$id}','{$name}', '{$description}', '{$price}', '{$availability}')");
    }
}


