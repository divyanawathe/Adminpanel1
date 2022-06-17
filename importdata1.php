<?php
// Load the database configuration file
include_once 'mydbCon.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $id   = $line[0];
                $source  = $line[1];
                $filename  = $line[2];
                $product_name = $line[3];
                $thumnail = $line[4];
                
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT id FROM sink WHERE source = '".$line[1]."'";
                $prevResult = $dbCon->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $dbCon->query("UPDATE sink SET id = '".$id."', source = '".$source."', filename = '".$filename."',product_name = '".$product_name."',type = '".$type."', modified = NOW() WHERE thumbnail = '".$thumbnail."'");
                }else{
                    // Insert member data in the database
                    $dbCon->query("INSERT INTO sink (id,source,filename,product_name,type,thumbnail) VALUES ('".$_POST['id']."', '".$_POST['source']."','".$_POST['filename']."', '".$_POST['product_name']."','".$_POST['type']."', '".$_POST['thumbnail']."')");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: index.php".$qstring);