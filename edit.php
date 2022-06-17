<?php 

    require_once("mydbCon.php");

    if(isset($_POST['edit']))
    {
        $id = $_GET['id'];
        $source = $_POST['source'];
        $filename = $_POST['filename'];
        $product_name = $_POST['product_name'];
        $type = $_POST['type'];
        $thumbnail = $_POST['thumbnail'];

        $query = " update records set  source='".$source."', filename='".$filename."',product_name='".$product_name."',type='".$type."',thumbnail='".$thumbnail."' where id = '".$id."'";
        $result = mysqli_query($dbcon,$query);

        if($result)
        {
            header("location:login.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:login.php");
    }


?>


