<?php


include 'mydbCon.php';

$query="select * from check"; // Fetch all the data from the table customers

$result=mysqli_query($dbCon,$query);

?>