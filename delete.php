<script type="text/javascript">
    document.cookie="flag=0";
  if(confirm("ARE YOU SURE?") == true)
  {
    document.cookie="flag=1";
  }
</script>
<?php    
    include "mydbCon.php";
    if(isset($_POST['submit']))
    {
        if($_COOKIE["flag"]=="0")
        {   
            $sql="DELETE FROM ".$_POST['submit']." WHERE id='".$_POST['id']."'"; 
            if ($dbCon->query($sql) === TRUE)
            {
                echo "<script> alert('Successfully deleted.')
                     window.location='login.php'
                </script>";
                
            }
            else
            {
                echo "<script> alert('Failed')
                    window.location='tables.php'
                </script>";
            }
        }
        else
        {
            echo "<script>
                    window.location='login.php'
                </script>";
        }
    }
?>