<?php
 require('../database/db.php');

 if (isset($_POST['kirim'])) {
   $nama = mysqli_escape_string($db, $_POST['nama']);
   $email = mysqli_escape_string($db, $_POST['email']);
   $password = mysqli_escape_string($db, $_POST['password']);
   $password_hash = password_hash($password, PASSWORD_DEFAULT);

     //  Check duplicate users
    $get = mysqli_query($db, "SELECT * FROM tb_users WHERE nama='".$nama."'");

    if(mysqli_num_rows($get) > 0){
         echo "<script>
                    alert('Akun telah terdaptar, gunakan akun lain');
                    document.location='../pages/register.php';
                </script>";
    }else{
        $insert = mysqli_query($db, "INSERT INTO tb_users VALUES(NULL, '$nama', '$email', '$password_hash')");

        if($insert){
            header('Location: ../pages/register.php?status=success');
        }else{
            header('Location: ../pages/register.php?status=failed');
        }
    }
 }
?>