  <?php
    mysqli_connect("localhost","root","");
    mysql_connect_db("loginentry");
    $res=mysql_query("select from loginpage");
    echo "<table>";
    while($row=mysql_fetch_array($res))
   {
      echo"<tr>";
      echo "<td>";?> <img src="<?php echo $col["photo"];?>" height="100" width= "100"> <?echo"</td>";
      echo"<td>";   echo $col["name"];   echo"</td>";
      echo "</tr>";
}
      echo "</table>";
    ?>