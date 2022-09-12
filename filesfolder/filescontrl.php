<?php
class FilesContrl extends FilesModel{
    public function importFiles(){
        if (isset($_POST['IMPORT'])) {
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            $header =  false;
            $data= [];
            while (!feof($csvFile) ) {
                $row = fgetcsv($csvFile);
                $header = $row;

               // $data = array_combine($header,$row);
                //$query = $this->insertFiles();
                // $query->bindParam(':phone_number', $data['phone_number'][0]);     
                // $query->bindParam(':name', $data['name'][0]);     
                // $query->execute();
            

                
               
                
            }
            //echo $count;
            if (!empty($query->execute())){
                echo 'files imported successfully';
            }else {
                'Error occurred while importing files';
            }
            //return $line;
        }
        echo 'import is not set';
    }
    public function checkCsv(){
        $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream',
                    'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

       if (!empty($_FILES['name']) && in_array($_FILES['file']['type'],$csvMimes)) {
            
       }             
    }

    
}