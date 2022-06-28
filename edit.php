<?//php 

    // require_once("mydbCon.php");

    // if(isset($_POST['edit']))
    // {
    //     $id = $_GET['id'];
    //     $vendor_id = $_POST['vendor_id'];
    //     $name = $_POST['name'];
    //     $product_name = $_POST['product_name'];
    //     $email = $_POST['email'];
    //     $phone_num = $_POST['phone_num'];
    //     $city = $_POST['city'];
    //     $state = $_POST['state'];
    //     $qur_subject = $_POST['qur_subject'];
    //     $page_no = $_POST['page_no'];
    //     $Delete = $_POST['Delete'];
    //     $Edit = $_POST['Edit'];

    //     $query = " update records set  vendor_id='".$vendor_id."', name='".$name."',email='".$email."',phone_num='".$phone_num."',city='".$city."',state='".$state."', qur_subject='".$qur_subject."', page_no='".$page_no."',Delete='".$Delete."',Edit='".$Edit."' WHERE id = '".$id."'";
    //     $result = mysqli_query($dbCon,$query);

    //     if($result)
    //     {
    //         header("location:login.php");
    //     }
    //     else
    //     {
    //         echo 'Please Check Your Query ';
    //     }
    // }
    // else
    // {
    //     header("location:login.php");
    // }
?>





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
               
        if($_COOKIE["flag"]=="1")
        {   
          
             $sql="SELECT * FROM inqueries";
            if ($dbCon->query($sql) === TRUE)
              {
            
                     echo header('location=forms.php');
                
                
            }
        //     else
        //     {
        //          echo "<script> alert('Failed')
        //             window.location='tables.php'
        //          </script>";
        //     }
         }
        // else
        // {
        //     echo "<script>
        //             window.location='login.php'
        //         </script>";
        // }
   }
?>