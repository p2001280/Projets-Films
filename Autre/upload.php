<?php
require("../Models/FilmManager.php");
if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('png','jpg','jpeg');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = '../upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                echo "succes !";
                $FilmManager = new FilmManager();
                $FilmManager->setImage($fileDestination,$_GET['id']);
                //header('Location: ' . $_SERVER['HTTP_REFERER']);
                
            

            
        }else{
            echo "erreur";
        }
    } else {
        echo "formats compatibles : png,jpg,jpeg";
    }
}