<?php
class FilesContrl extends FilesModel{
    public function importFiles(){
        if (isset($_POST['IMPORT'])) {
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            $count = 0;
            while ($column = fgetcsv($csvFile))  {
                $count++;
                print_r($column);
                $query = $this->insertFiles();
                $query->bindParam(':phone_number', $column[0]);    
                $query->bindParam(':name', $column[1]);     
                $query->execute();
            }
            echo 'I loop' . $count . 'times';
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