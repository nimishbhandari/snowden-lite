<?php
session_start();
require_once 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="SNOWDEN">
    <meta name="description" content="FUN Event">
    <meta name="keywords" content="ieeesb, ieee, mmmut, gorkahpur">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Aditya Saha,Sanskar Srivastava,Prakhar Saxena,Nimish Bhandari">
    <meta name="Team" content="WebDevelopers">
    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="shortcut icon" /> -->
    <link href="img/ts.png" rel="shortcut icon">
    <title>SNOWDEN</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- navbar starts -->

    <nav class="navbar navbar-expand-lg pt-4 mx-auto fixed-top">
        <a class="navbar-brand text-light" href="#"><img src="img/ts.png"> | MMMUT</a>
        <button class="navbar-toggler m-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i> MENU
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active  for-toggler">
                    <a class="nav-link text-light" href="">Home</a>
                </li>
                <li class="nav-item for-toggler">
                    <a class="nav-link text-light" href="rules.php">Rules</a>
                </li>
                <li class="nav-item for-toggler">
                    <a class="nav-link text-light" href="contactus.php">Contact Us</a>
                </li>
            </ul>
            <span class="navbar-text btn btn-light for-toggler login-btn">
                <a id="forlogin" class="text-dark">
                    <span class="fa fa-sign-in"></span> Login</a>
            </span>
        </div>
    </nav>

    <!-- navbar ends -->
    <!-- modal starts -->

    <div id="loginModal" class="modal fade container" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="login-process.php">
                        <div class="form-group col-12 col-md-8 mx-auto mt-3">
                            <?php
                            if (isset($_GET['message'])) {
                                if ($_GET['message'] == 1) {
                            ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo "Invalid Login Credentials"; ?>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                            <div class="form-group col-12 col-md-8 mx-auto mt-3">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" name="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>
                            <div class="form-group col-12 col-md-8 mx-auto mt-3">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row mt-3 d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary btn-sm mr-3" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-3">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal ends -->

    <!-- home page starts -->

    <section id="home" class="container text-light d-flex flex-column align-items-center justify-content-center text-center">
        <h1 class="mx-auto px-auto text-danger">EVENT NAME</h1>
        <p class="mx-auto px-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius modi nesciunt iste tempora? Veniam, expedita? <br>Excepturi, praesentium veniam! Et, eveniet fugiat, totam cumque rerum,<br> corporis quia nulla ab provident hic maiores eaque amet ipsa earum mollitia nobis commodi<br> id veniam qui optio nihil perspiciatis quo. Asperiores dolore<br> unde doloremque nam?</p>
        <a href="#register" class="btn btn-danger mt-3">REGISTER</a>
        <a href="#register" class="down-arrow"><i class="fa fa-angle-down"></i></a>
    </section>

    <!-- home page ends -->

    <!-- REGISTER page starts -->

    <section id="register" class="container text-light d-flex flex-column align-items-center justify-content-center text-center">

        <form class="form-login row" method="post" action="registerprocess.php">
            <div class="text-center  text-danger col-12 mt-5 pt-3">
                <h2>Register Now!!!</h2>
            </div>
            <div class="col-12 col-md-6 mx-auto">
                <?php
                if (isset($_GET['message'])) {

                    if ($_GET['message'] == 2) {
                ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo "Failed to Register"; ?>
                        </div>
                <?php
                    }
                }
                ?>

                <?php

                if (isset($_GET['message'])) {
                    if ($_GET['message'] == 10) {
                ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo "Email already Exist"; ?>
                        </div>
                <?php
                    }
                }
                ?>

                <?php if (isset($_GET['message'])) {
                    if ($_GET['message'] == 11) {
                ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo "Empty Fields"; ?>
                        </div>
                <?php
                    }
                }
                ?>

                <?php
                if (isset($_GET['message'])) {
                    if ($_GET['message'] == 12) {
                ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo "Registration was successful"; ?>
                        </div>
                <?php
                    }
                }
                ?>


                <div class="whole">
                    <div class="input-group mt-5">
                        <input type="text" name="username" autocomplete="off" required>
                        <span class="text">Username</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="whole">
                    <div class="input-group mt-5">
                        <input type="email" name="email" autocomplete="off" required pattern="^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$">
                        <span class="text">Email</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="whole">
                    <div class="input-group mt-5">
                        <input type="text" name="college" autocomplete="off" required>
                        <span class="text">College</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="whole">
                    <div class="input-group mt-5">
                        <input type="tel" name="year" autocomplete="off" pattern="[1-4]{1}" required>
                        <span class="text">Year</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="whole">
                    <div class="input-group mt-5">
                        <input type="text" name="contact" autocomplete="off" required>
                        <span class="text">Contact Number</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="whole">
                    <div class="input-group mt-5">
                        <input type="password" name="password" autocomplete="off" required>
                        <span class="text">Password</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class=" mt-3 mb-3 col-12">
                <input type="submit" value="Register" name="register" class="btn btn-danger btn-round px-5">
            </div>
        </form>
    </section>

    <!-- REGISTER page ends -->

    <footer>
        <p class="text-center text-light">techSRIJAN &#169; 2020 | Developed By <a href="#">IEEE SB , MMMUT</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#forlogin").click(function() {
                $("#loginModal").modal("show");
            });
        });
    </script>
</body>

</html>