<?php
session_start();
require_once './config/connect.php';
if (!isset($_SESSION['user']) & empty($_SESSION['user'])) {
    header('location: index.php');
}
$email = $_SESSION['user'];
$sql1 = "SELECT * FROM solver WHERE email='$email'";
$res1 = mysqli_query($connection, $sql1);
$r1 = mysqli_fetch_assoc($res1);
$thm_a =  $r1['thm_a'];
$thm_b =  $r1['thm_b'];
$thm_c =  $r1['thm_c'];
$thm_d =  $r1['thm_d'];
$thm_e =  $r1['thm_e'];
$thm_f =  $r1['thm_f'];
$thm_g =  $r1['thm_g'];
$thm_h =  $r1['thm_h'];
$thm_i =  $r1['thm_i'];
$thm_j =  $r1['thm_j'];
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
    <title>SNOWDEN | DashBoard</title>

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
                    <a class="nav-link text-light" href="">DashBoard</a>
                </li>
                <li class="nav-item for-toggler">
                    <a class="nav-link text-light" href="rules.php" target="_blank">Rules</a>
                </li>
                <li class="nav-item for-toggler">
                    <a class="nav-link text-light" target="_blank" href="leaderboard.php" target="_blank">LeaderBoard</a>
                </li>
            </ul>
            <span class="navbar-text btn btn-light for-toggler login-btn">
                <a href="logout.php" id="forlogin" class="text-dark">
                    LogOut</a>
            </span>
        </div>
    </nav>

    <!-- navbar ends -->
    <!-- dashboard begin -->

    <section class="container mt-5 pt-5 pb-5 dashboard">
        <h1 class="text-center themes mt-5 mb-5 text-danger"> THEMES </h2>
            <div class="category-items">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme1</h4>
                                <h4><?php echo $thm_a ?>/5</h4>
                                <p style="color: green;">
                                    <?php
                                    if ($thm_a == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_a == 6) {
                                echo 'Comleted!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_a/a<?php echo $thm_a ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme2</h4>
                                <h4><?php echo $thm_b ?>/5</h4>
                                <p style="color: green;">
                                    <?php
                                    if ($thm_b == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_b == 6) {
                                echo 'Completed!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_b/b<?php echo $thm_b ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme3</h4>
                                <h4><?php echo $thm_c ?>/5</h4>
                                <p style="color: green;">
                                    <?php
                                    if ($thm_c == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_c == 6) {
                                echo 'Completed!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_c/c<?php echo $thm_c ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme4</h4>
                                <h4><?php echo $thm_d ?>/5</h4>
                                <p style="color: green;">
                                    <?php
                                    if ($thm_d == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_d == 6) {
                                echo 'Completed!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_d/d<?php echo $thm_d ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme5</h4>
                                <h4><?php echo $thm_e ?>/5</h4>
                                <p style="color: green;">
                                    <?php
                                    if ($thm_e == 6) {
                                        echo 'Completed!!';
                                    } else {
                                    ?>
                                </p>
                            </div>
                            <a class="ci-logo" href="levels/theme_e/e<?php echo $thm_e ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                <i class="fa fa-chevron-right text-light"></i>
                            </a>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme6</h4>
                                <h4><?php echo $thm_f ?>/5</h4>

                                <p style="color: green;">
                                    <?php
                                    if ($thm_f == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_f == 6) {
                                echo 'Completed!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_f/f<?php echo $thm_f ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme7</h4>
                                <h4><?php echo $thm_g ?>/5</h4>

                                <p style="color: green;">
                                    <?php
                                    if ($thm_g == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_g == 6) {
                                echo 'Completed!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_g/g<?php echo $thm_g ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme8</h4>
                                <h4><?php echo $thm_h ?>/5</h4>
                                <p style="color: green;">
                                    <?php
                                    if ($thm_h == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_h == 6) {
                                echo 'Completed!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_h/h<?php echo $thm_h ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme9</h4>
                                <h4><?php echo $thm_i ?>/5</h4>
                                <p style="color: green;">
                                    <?php
                                    if ($thm_i == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_i == 6) {
                                echo 'Completed!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_i/i<?php echo $thm_i ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="category-item">
                            <img src="https://picsum.photos/500/300/?image=10" alt="">
                            <div class="ci-text">
                                <h4>Theme10</h4>
                                <h4><?php echo $thm_j ?>/5</h4>
                                <p style="color: green;">
                                    <?php
                                    if ($thm_j == 6) {
                                        echo 'Completed!!';
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            if ($thm_j == 6) {
                                echo 'Completed!!';
                            } else {
                            ?>
                                <a class="ci-logo" href="levels/theme_j/j<?php echo $thm_j ?>.php" data-toggle="tooltip" data-placement="top" title="Tap To Play">
                                    <i class="fa fa-chevron-right text-light"></i>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- dashboard end -->

    <!-- footer begins -->

    <footer>
        <p class="text-center text-light">techSRIJAN &#169; 2020 | Developed By <a href="#">IEEE SB , MMMUT</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>