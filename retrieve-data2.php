<?php


include 'mydbCon.php';

$query="select * from ral_standard"; // Fetch all the data from the table customers

$result=mysqli_query($dbCon,$query);

?>