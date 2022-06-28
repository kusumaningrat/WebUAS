<?php
    include '../controller/upload_controller.php.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/img/youtube.png" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/78da7f43ac.js" crossorigin="anonymous"></script>

    <title>Upload Videos</title>
</head>

<body>
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center gradient-custom-3">
            <div class="container h-50 mt-5 mb-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Upload Your Videos</h2>
                                <?php if(isset($_GET['status'])): ?>
                                    <p style="text-align: center;font-weight: bold;font-size: 20px;" class="text-success">
                                        <?php
                                            if($_GET['status'] == 'success'){
                                                echo "Video Berhasil di upload <a href='../index.php'>Home</a>";
                                            }else{
                                                echo "Video Gagal di upload <a href='../index.php'>Home</a>";

                                            }
                                            
                                        ?>
                                    </p>
                                <?php endif; ?>
                                <form action="../controller/upload_controller.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-outline mb-4">
                                        <label>Title</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="title" autocomplete="off" autofocus="true" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label>Tags</label>
                                        <select name="tags" id="tags" class="form-control form-control-lg">
                                            <option value="">Pilih Tags</option>
                                            <option value="linux">Linux</option>
                                            <option value="cisco">Cisco</option>
                                            <option value="web">Web</option>
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label>Upload Videos</label>
                                        <input type="file" class="form-control form-control-lg" name="video" autocomplete="off" autofocus="true" required/>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                                    </div>
                                    <p class="text-center text-muted mt-5 mb-0">Yotube <a href="../index.php" class="fw-bold text-body"><u>Login here</u></a></p>
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