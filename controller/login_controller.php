<?php
    session_start();

    if(isset($_SESSION["login"])){
        header('Location: ../index.php');
    }
    include('../database/db.php');

    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password  = $_POST['password'];

        $result = mysqli_query($db, "SELECT * FROM tb_users WHERE email='$email'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){

                // set session
                $_SESSION["login"] = true;
                header('Location: ../index.php');
                exit;
            }else{
                header('Location: ../pages/login.php?status=wrong');
            }
        }else{
            header('Location: ../pages/login.php?status=failed');
            exit;
            
        }
    }
?>