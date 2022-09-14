<?php
class FilesModel extends Database{
    public $name;
    public $contact;

    public function  insertFiles(){
        $insertQuery = "INSERT INTO contactlist (phone_number, name) VALUES (:phone_number, :name)";
        $stmt = $this->connect()->prepare($insertQuery);
        return $stmt;
    }

    // public function getfiles(){
    //     $getFilesQuery = "SELECT * FROM contactlist WHERE id = ?";
    //     $stmt = $this->connect()->prepare($getFilesQuery);
    //     $stmt->bindParam(1, $this->id);
    //     $stmt->execute();
    //     return $stmt;
    // }
    
}