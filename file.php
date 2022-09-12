<?php 
include_once './config/database.php';
include_once './filesfolder/fileview.php';
include_once './filesfolder/filesModel.php';
include_once './filesfolder/filescontrl.php';

//include_once './filesfolder/procedural.php';


$file = new FilesContrl;
$file->importFiles();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="IMPORT" name ="IMPORT">
    </form>
</body>
</html>