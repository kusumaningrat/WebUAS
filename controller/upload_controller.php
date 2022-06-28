<?php
 require('../database/db.php');

 if (isset($_POST['upload'])) {
   $title = mysqli_escape_string($db, $_POST['title']);
   $tags = mysqli_escape_string($db, $_POST['tags']);
   $nama_file = $_FILES['video']['name'];
   $sumber = $_FILES['video']['tmp_name'];
   $folder = "../assets/video/";
   chmod($folder,0755);  

   move_uploaded_file($sumber, $folder.$nama_file);
   $insert = mysqli_query($db, "INSERT INTO contents VALUES(NULL, '$title', '$tags', '$nama_file')");

   if($insert){
        header('Location: ../pages/upload_videos.php?status=success');
    }else{
        header('Location: ../pages/upload_videos.php?status=failed');
    }
 }
?>