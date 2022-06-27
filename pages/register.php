<?php
    include '../controller/register_controller.php';
    session_start();

    if(!isset($_SESSION["login"])){
        header("Location: pages/login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/78da7f43ac.js" crossorigin="anonymous"></script>

    <title>Register Account</title>
</head>

<body>
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center gradient-custom-3">
            <div class="container h-50 mt-5 mb-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                <?php if(isset($_GET['status'])): ?>
                                    <p style="text-align: center;font-weight: bold;font-size: 20px;" class="text-success">
                                        <?php
                                            if($_GET['status'] == 'success'){
                                                echo "User Berhasil di buat <a href='login.php'>Login</a>";
                                            }
                                            
                                        ?>
                                    </p>
                                <?php endif; ?>
                                <form action="../controller/register_controller.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-outline mb-4">
                                        <label>Your Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="nama" autocomplete="off" autofocus="true" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label>Your Email</label>
                                        <input type="email" class="form-control form-control-lg" name="email" autocomplete="off" autofocus="true" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg" name="password" autocomplete="off" autofocus="true" required/>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary" name="kirim">Register</button>
                                    </div>
                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<!-- Core theme JS-->
        <script src="../assets/js/scripts.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>

</html>