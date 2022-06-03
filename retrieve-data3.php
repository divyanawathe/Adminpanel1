<?php


include 'mydbCon.php';

$query="select * from sink"; // Fetch all the data from the table customers

$result=mysqli_query($dbCon,$query);

?>