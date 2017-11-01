<?php
include("api.php");
mysqli_select_db($con, "test");
$result = mysqli_query($con, "SELECT * FROM list");
$maxID = mysqli_query($con, "SELECT MAX(itemId) AS MAX FROM `list`");
$row = mysqli_fetch_array($maxID);
$largestNumber = $row['MAX'];
$largestNumber++;

echo "<table border='1' id='user_data' >
<tr>
<td align=center><b>ID</b></td>
<td align=center> <b>Name</b></td>
<td align=center><b>Description</b></td>
<td align=center><b>Price</b></td>
<td align=center><b>Availabity</b></td>
<td align=center><b>Delete</b></td>";


while ($data = mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td contenteditable class=\"update\" data-id=$data[0] data-column='itemId' align=center>$data[0]</td>";
    echo "<td contenteditable class=\"update\" data-id=$data[0] data-column='name' align=center>$data[1]</td>";
    echo "<td contenteditable class=\"update\" data-id=$data[0] data-column='description' >$data[2]</td>";
    echo "<td contenteditable class=\"update\" data-id=$data[0] data-column='price' align=center>$data[3]</td>";
    echo "<td contenteditable class=\"update\" data-id=$data[0] data-column='availability' align=center>$data[4]</td>";
    echo "<td contenteditable class=\"update\" data-id=$data[0] align=center ><button data-id=$data[0] id='delete' value='Delete' class='delete'><i class=\"fa fa-trash\"></i></button></td>";
    echo "</tr>";

}
echo "
<tr>
<td><input type=\"text\" id=\"itemId\" value='" . $largestNumber . "' onkeypress=\"return checknumber(event,'itemId')\"></td>
<td><input type=\"text\" id=\"name\"></td>
<td><input type=\"text\" id=\"description\"></td>
<td><input type=\"text\" id=\"price\" onkeypress=\"return checknumber(event,'price')\"></td>
<td><input type=\"text\" id=\"availability\" onkeypress=\"return checknumber(event,'availability')\"></td>
<td align=center><button id=\"submit\" value=\"Add\"><i class=\"fa fa-plus\"></i></button></td>";
echo "</table>";

?>