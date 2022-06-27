<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: pages/login.php");
    exit;
}
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
                <a class="list-group-item list-group-item-action list-group-item-light p-3 " href="#!"><i
                        class="fa-solid fa-house" style="margin-right: 6px;"></i>Home</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 " href="pages/favourites.php"><i
                        class="fa-solid fa-bookmark" style="margin-right: 6px;"></i>Favourites</a>
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
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="40px" height="40px" class="nav-link dropdown-toggle rounded-circle" 
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">
                                <!-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a> -->
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="pages/login.php">Login</a>
                                    <a class="dropdown-item" href="pages/register.php">Register</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="controller/logout_controller.php">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="myBtnContainer" style="text-align: center;margin-top: 15px;">
                <button class="btn active" onclick="filterSelection('all')">Show all</button>
                <button class="btn" onclick="filterSelection('linux')">Linux</button>
                <button class="btn" onclick="filterSelection('cisco')">Cisco</button>
                <button class="btn" onclick="filterSelection('web')">Web</button>
                <hr>
            </div>
            <div class="container">
                <div class="row row-cols-4 row-cols-md-auto g-2 mt-2" style="margin-left: 50px;">
                    <div class="filtering linux">
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls >
                                <source src="assets/video/linux1.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;">Konfigurasi DNS Server di Debian 10</h5>
                                <h6 class="card-user mb-2 mt-2 text-muted">Kusuma</h6>
                                <a href="#" class="btn btn-primary btn-sm" style="background-color: red;">
                                    Subscribe
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;">
                                    <i class="far fa-heart" style="color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="filtering linux">
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls>
                                <source src="assets/video/linux2.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;">Konfigurasi Web Server di Debian 10</h5>
                                <h6 class="card-user mb-2 mt-2 text-muted">Kusuma</h6>
                                <a href="#" class="btn btn-primary btn-sm" style="background-color: red;">
                                    Subscribe
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;">
                                    <i class="far fa-heart" style="color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="filtering linux">
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls>
                                <source src="assets/video/linux3.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;">Konfigurasi FTP Server di Debian 10</h5>
                                <h6 class="card-user mb-2 mt-2 text-muted">Kusuma</h6>
                                <a href="#" class="btn btn-primary btn-sm" style="background-color: red;">
                                    Subscribe
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;">
                                    <i class="far fa-heart" style="color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="filtering cisco">
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls>
                                <source src="assets/video/vid1.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;">Konfigurasi DNS Server di Cisco </h5>
                                <h6 class="card-user mb-2 mt-2 text-muted">Kusuma</h6>
                                <a href="#" class="btn btn-primary btn-sm" style="background-color: red;">
                                    Subscribe
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;">
                                    <i class="far fa-heart" style="color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="filtering cisco">
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls>
                                <source src="assets/video/vid2.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;">Konfigurasi Web Server di Cisco</h5>
                                <h6 class="card-user mb-2 mt-2 text-muted">Kusuma</h6>
                                <a href="#" class="btn btn-primary btn-sm" style="background-color: red;">
                                    Subscribe
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;">
                                    <i class="far fa-heart" style="color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="filtering cisco">
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls>
                                <source src="assets/video/vid3.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;">Konfigurasi FTP Server di Cisco</h5>
                                <h6 class="card-user mb-2 mt-2 text-muted">Kusuma</h6>
                                <a href="#" class="btn btn-primary btn-sm" style="background-color: red;">
                                    Subscribe
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;">
                                    <i class="far fa-heart" style="color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="filtering web">
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls>
                                <source src="assets/video/vid4.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;">Membuat Tag HTML</h5>
                                <h6 class="card-user mb-2 mt-2 text-muted">Kusuma</h6>
                                <a href="#" class="btn btn-primary btn-sm" style="background-color: red;">
                                    Subscribe
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;">
                                    <i class="far fa-heart" style="color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="filtering cisco">
                        <div class="card" style="width: 20rem;">
                            <video width="320" height="240" controls>
                                <source src="assets/video/server1.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <img src="assets/img/profile.jpeg" alt="Profile" width="30px">
                                <h5 class="card-title mb-2" style="display: inline;margin-top: 1px;">Membuat Flex</h5>
                                <h6 class="card-user mb-2 mt-2 text-muted">Kusuma</h6>
                                <a href="#" class="btn btn-primary btn-sm" style="background-color: red;">
                                    Subscribe
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm" style="margin-left: 2px;background-color: #2196F3;">
                                    <i class="far fa-heart" style="color: white;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
        <script>
            filterSelection("all")
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("filtering");
                if (c == "all") c = "";
                // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
                for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                }
            }

            // Show filtered elements
            function w3AddClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                    }
                }
            }

            // Hide elements that are not selected
            function w3RemoveClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                    }
                }
                element.className = arr1.join(" ");
            }

                // Add active class to the current control button (highlight it)
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>