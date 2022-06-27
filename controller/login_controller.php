<?php
    include('../database/db.php');

    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password  = $_POST['password'];

        $result = mysqli_query($db, "SELECT * FROM tb_users WHERE email='$email'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                header('Location: ../index.php');
                exit;
            }else{
                echo "<script>alert('Password salah')</script>";
                var_dump($row);
            }
        }else{
            echo "<script>alert('Akun tidak ditemukan')</script>";
            
        }
    }
?>