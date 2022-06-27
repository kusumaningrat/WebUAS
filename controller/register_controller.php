<?php
 require('../database/db.php');

 if (isset($_POST['kirim'])) {
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $password = hash('sha512
   ', $_POST['password']);

     //  Check duplicate users
    $get = mysqli_query($db, "SELECT * FROM tb_users WHERE nama='".$nama."'");

    if(mysqli_num_rows($get) > 0){
         echo "<script>
                    alert('Akun telah terdaptar, gunakan akun lain');
                    document.location='../pages/register.php';
                </script>";
    }else{
        $insert = mysqli_query($db, "INSERT INTO tb_users ('id', 'nama', 'email', 'password') VALUES(NULL, '$nama', '$email', '$password')");

        if($insert){
            echo "<script>
                alert('Data berhasil disimpan');
                 document.location='index.php';
                </script>";
            header('Location: ../pages/login.php');
        }else{
                    echo "<script>
                        alert('Data gagal disimpan');
                        document.location='index.php';
                    </script>"; 
            header('Location: ../pages/register.php');
        }
    }
 }
?>