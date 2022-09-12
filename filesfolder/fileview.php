<?php
require_once './filesfolder/filesModel.php';
class fileview extends FilesModel{
    public function showfiles(){
        $result = $this->getFiles();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo $row['id'];
            echo $row['name'];
            echo $row['phone_number'];
        }
    }
    
}

