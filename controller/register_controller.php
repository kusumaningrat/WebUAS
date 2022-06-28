<?php
 require('../database/db.php');

 if (isset($_POST['kirim'])) {
   $nama = mysqli_escape_string($db, $_POST['nama']);
   $email = mysqli_escape_string($db, $_POST['email']);
   $password = mysqli_escape_string($db, $_POST['password']);
   $password_hash = password_hash($password, PASSWORD_DEFAULT);
   $nama_file = $_FILES['gambar']['name'];
   $sumber = $_FILES['gambar']['tmp_name'];
   $folder = "../assets/img/profile/";
   chmod($folder,0755);  

   move_uploaded_file($sumber, $folder.$nama_file);

     //  Check duplicate users
    $get = mysqli_query($db, "SELECT * FROM tb_users WHERE nama='".$nama."'");

    if(mysqli_num_rows($get) > 0){
         echo "<script>
                    alert('Akun telah terdaptar, gunakan akun lain');
                    document.location='../pages/register.php';
                </script>";
    }else{
        $insert = mysqli_query($db, "INSERT INTO tb_users VALUES(NULL, '$nama', '$email', '$password_hash', '$nama_file')");

        if($insert){
            header('Location: ../pages/register.php?status=success');
        }else{
            header('Location: ../pages/register.php?status=failed');
        }
    }
 }
?>