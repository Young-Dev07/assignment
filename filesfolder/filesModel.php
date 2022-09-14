<?php
class FilesModel extends Database{
    public $name;
    public $contact;

    public function  insertFiles(){
        $insertQuery = "INSERT INTO contactlist (phone_number, name) VALUES (:phone_number, :name)";
        $stmt = $this->connect()->prepare($insertQuery);
        return $stmt;
    }
}