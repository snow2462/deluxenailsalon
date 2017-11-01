
<?php
$con= new mysqli("localhost","root","root","test");
mysqli_set_charset($con,'utf8');
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}   
?>

