<?php
include 'database/db.php';
session_start();

if(!isset($_SESSION["login"])){
    header("Location: pages/login.php");
    exit;
}

$result = mysqli_query($db, "SELECT * FROM tb_users WHERE id = '" . $_SESSION['id']."'");
$user = mysqli_fetch_assoc($result);


// die();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Youtube</title>
    <link rel="icon" type="image/x-icon" href="assets/img/youtube.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/index.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/78da7f43ac.js" crossorigin="anonymous"></script>
    <style>

        .filtering {
            color: black;
            margin: 2px;
            display: none; /* Hidden by default */
        }

        /* The "show" class is added to the filtered elements */
        .show {
          display: block;
        }

        /* Style the buttons */
        .btn {
            border: none;
            outline: none;
            padding: 12px 20px;
            background-color: #f1f1f1;
            cursor: pointer;
        }

        /* Add a light grey background on mouse-over */
        .btn:hover {
         background-color: #ddd;
        }

        /* Add a dark background to the active button */
        .btn.active {
            background-color: #2196F3;
            color: white;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading bg-light">Youtube</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3 " href="index.php"><i
                        class="fa-solid fa-house" style="margin-right: 6px;"></i>Home</a>
                <p style="color: grey;text-transform: uppercase;margin-left: 8px;margin-top: 5px;">Subscriptions</p>
                <p style="margin-left: 8px;margin-top: 5px;""><img src="assets/img/profile.jpeg" width="30px" alt=""> Zulhizmi</p>
                <p style="margin-left: 8px;margin-top: 5px;""><img src="assets/img/unpas.jpeg" width="30px" alt="" class="rounded-circle"> Web Programming UNPAS</p>
                <p style="margin-left: 8px;margin-top: 5px;""><img src="assets/img/trans7.jpeg" width="30px" alt="" class="rounded-circle"> TRANS7 OFFICIAL</p>
                <p style="margin-left: 8px;margin-top: 5px;""><img src="assets/img/laporpak.jpeg" width="30px" alt="" class="rounded-circle"> Lapor Pak</p>
                <p style="margin-left: 8px;margin-top: 5px;""><img src="assets/img/programmer.jpg" width="30px" alt="" class="rounded-circle"> Programmer Zaman Now</p>
                <hr>
                <p class="list-group-item-light p-2"><i
                        class="fa-solid fa-gear" style="margin-right: 8px;margin-left: 6px;margin-bottom: 2px;"></i>Settings</p>
                <p class="list-group-item-light p-2"><i
                        class="fa-solid fa-flag" style="margin-right: 8px;margin-left: 6px;"></i>Report History</p>
                <p class="list-group-item-light p-2"><i
                        class="fa-solid fa-circle-question" style="margin-right: 8px;margin-left: 6px;"></i>Help</p>
                <p class="list-group-item-light p-2"><i
                        class="fa-solid fa-comments" style="margin-right: 8px;margin-left: 6px;"></i>Feedback</p>
                
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg border navbar-light bg-light">
                <div class="container-fluid">
                    <i class="fa-solid fa-bars" id="sidebarToggle"></i>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                            <form class="example" action="action_page.php" style="margin-left: 350px;">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            <li class="nav-item dropdown" style="margin-left: 470px;list-style: none;">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;"><i class="fa-solid fa-plus"></i></a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="pages/upload_videos.php" target="_blank"><i class="fa-solid fa-video" style="margin-right: 5px;"></i>Upload Videos</a>
                                    <a class="dropdown-item" href="pages/register.php"><i class="fa-solid fa-globe" style="margin-right: 5px;"></i>Go Live</a>
                                </div>
                            </li>
                            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <img src="assets/img/profile/<?php echo $user['image'] ?>" alt="Profile" width="40px" height="40px" class="nav-link dropdown-toggle rounded-circle" 
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">
                                <!-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a> -->
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="pages/login.php">Login</a>
                                    <a class="dropdown-item" href="pages/register.php" target="_blank">Register</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="controller/logout_controller.php">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="myBtnContainer" style="text-align: center;margin-top: 15px;">
                <button class="btn active" onclick="filterSelection('all')" name="show_all">Show all</button>
                <button class="btn" onclick="filterSelection('linux')" name="linux">Linux</button>
                <button class="btn" onclick="filterSelection('cisco')">Cisco</button>
                <button class="btn" onclick="filterSelection('web')">Web</button>
                <hr>
            </div>
            <div class="container">
                <?php
                    $videos = mysqli_query($db, "SELECT * FROM contents");
                    $i = 1;
                    while($row = mysqli_fetch_assoc($videos)){
                       
                ?>
                <div class="col" style="margin-left: 50px;float: left;" id="wrapper<?php echo $i ?>">
                    <div class="filtering <?php echo $row['tags']?>"> 
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls>
                                <source src="assets/video/<?php echo $row['location']?>" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile/<?php echo $user['image'] ?>" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;"><?php echo $row['title'] ?></h5>
                                <h6 class="card-user mb-2 mt-2 text-muted"><?php echo $user['nama'] ?></h6>
                                <input type="button" class="btn" id="subs<?php echo $i ?>"  style="background-color: red;color: white;" onclick="Subs(<?php echo $i ?>)" value="Subscribe"></input>
                                <button href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;" onclick="Favourites(<?php echo $i ?>)">
                                    <i class="far fa-heart" style="color: white;" id="icon<?php echo $i ?>"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  $i++; } ?>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/index.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>