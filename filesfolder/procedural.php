<?php

$conn = mysqli_connect("localhost", "root", "", "blogprojectpdo");


if (isset($_POST['IMPORT'])) {
    $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
    
    while ($column = fgetcsv($csvFile)) {
        print_r($column);
        $query = "INSERT INTO contactlist (phone_number, name) VALUES('$column[0]', '$column[1]')";
        $result = mysqli_query($conn, $query);
        
        if (!empty($result)) {
            echo 'files imported successfully';
        }else {
            echo 'Error occurred while impoerting files';
        }
    }
}   


    //  $headerValues  = array();
    //  $counter = 0;
    //  $row = 0;
    //  if (($handle = fopen("test.csv", "r")) !== FALSE) {
    //     echo '<table class="tbl">'; 
    //     while(($data = fgetcsv($handle, 1000, ",")) !== false)
    //     {  
    //         // You need to grab the header values on first iteration
    //         if ($counter == 0) {
    //           // store them in an array
    //           $headerValues = $data;
    //           // increment counter
    //           $counter++;                  
    //         }                

    //         $col    = count($data); 
    //         echo '<tr>';
    //         for ($c=0; $c < $col; $c++) {
    //             // grab column name here
    //             $headerName = $headerValues[$c]; 
    //             $cell   = $data[$c];
    //             $colnum = $c + 1;
    //             if( $row == 0)
    //             {                    
    //                 echo "<td  style='text-transform:uppercase;'><br><br>". 
    //                         "<b>{$headerName}</b></td>"; 
    //             }
    //             else
    //             { 
    //                 echo "<td>{$cell} = {$headerName}</td>";  //{$row} = {$colnum} 
    //             } 
    //         }
    //         echo '</tr>'; 
    //         $row++; 

    //     }  

    //     echo '</table>';
    // }