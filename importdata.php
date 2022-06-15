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
                $ralcode  = $line[1];
                $rgbnum  = $line[2];
                $hexnum = $line[3];
                $Name = $line[4];
                
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT id FROM ral_standard WHERE ralcode = '".$line[1]."'";
                $prevResult = $dbCon->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $dbCon->query("UPDATE ral_standard SET ralcode = '".$ralcode."', rgbnum = '".$rgbnum."', hexnum = '".$hexnum."', modified = NOW() WHERE name = '".$name."'");
                }else{
                    // Insert member data in the database
                    $dbCon->query("INSERT INTO ral_standard (ralcode,rgbnum,hexnum,Name) VALUES ('".$_POST['ralcode']."','".$_POST['rgbnum']."','".$_POST['hexnum']."','".$_POST['name']."')");
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