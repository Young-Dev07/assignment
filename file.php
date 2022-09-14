<?php 
include_once './config/database.php';
include_once './filesfolder/filesModel.php';
include_once './filesfolder/filescontrl.php';



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
    <link rel="stylesheet" href="./css/file.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1 class="map">IMPORT CSV FILES PRACTISE </h1>
        <br>
        <div class="scolumn">
            <div>
                <div>Choose Csv files column....................</div>
                
                <select name="csv" id="csv">
                    <option value="phone_number">contact</option>
                    <option value="name">Names</option>
                </select>
                

            </div>
            <div>
                <div>Choose Databse Column</div>
                <select name="csv" id="Db">
                    <option value="phone_number">contact</option>
                    <option value="name">Names</option>
                </select>
            </div>
        </div>
        <br>
        <div><input type="file" name="file"></div>
        <br>
        <div>On what row would you like your headers to be set</div>
        <input type="text" name="header" placeholder="input an integer ">
        <br>
        <input type="submit" value="IMPORT" name ="IMPORT">
    </form>
</body>
</html>