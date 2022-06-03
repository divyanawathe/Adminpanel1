<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "visuareal";

    $dbCon = mysqli_connect($servername, $username, $password, $databaseName);
   
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
    

    ?>