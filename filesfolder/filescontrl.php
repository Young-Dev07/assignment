<?php
class FilesContrl extends FilesModel
{
    public function importFiles()
    {
        if (isset($_POST['IMPORT'])) {
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            $count = 0;
            $validated = $this->checkCsv();
            if(!$validated){
                echo "Not Validated";
                return;
            }
            $header = $this->getHeader();
            while ($column = fgetcsv($csvFile)) {
                $count++;   
                if ($count == $header) {
                    continue;
                }
                try {
                    $query = $this->insertFiles();
                    $query->bindParam(':phone_number', $column[0]);
                    $query->bindParam(':name', $column[1]);
                    $query->execute();
                    
                } catch (PDOException $e) {
                    echo "Query Failed" . $e->getMessage();
                }
                
            }
            echo 'Your file has been imported to database successfully';
        }
    }
    public function getHeader()
    {
        $header = $_POST['header'];
        if (empty($header) && $header<=0){
            echo 'set a valid  header';
        }
        return $header;
    }

    public function checkCsv()
    {
        $csvMimes = array(
            'text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream',
            'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain'
        );
        $fileType = $_FILES['file']['type'];
        if (in_array($fileType,$csvMimes)) {
           return true;
        }
        return false;

        
    }
}
