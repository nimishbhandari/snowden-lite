<?php
session_start();
require_once '../../config/connect.php';

$email = $_SESSION['user'];
$sql1 = "SELECT * FROM solver WHERE email='$email'";
$res1 = mysqli_query($connection, $sql1);
$r1 = mysqli_fetch_assoc($res1);
$thm_a =  $r1['thm_a'];
$score =  $r1['score'];

$sql2 = "SELECT * FROM coder WHERE id=1";
$res2 = mysqli_query($connection, $sql2);
$r2 = mysqli_fetch_assoc($res2);

$c_score =  $r2['score'];

if ($thm_a != 0) {
    header('location: ./a' . $thm_a . '.php');
}
if (!isset($_SESSION['user']) & empty($_SESSION['user'])) {
    header('location: index.php');
}
if (isset($_POST['ans'])) {
    $sql_solver = "UPDATE solver SET thm_a='$thm_a'+1 WHERE email='$email'";
    if (mysqli_query($connection, $sql_solver)) {
        header("location: a1.php");
    }
}

// echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="snowden">
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
    <link href="../img/ts.png" rel="shortcut icon">
    <title>SNOWDEN</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        body {
            height: unset;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg pt-4 mx-auto fixed-top">
        <a class="navbar-brand text-light" href="#"><img src="../../img/ts.png"> | MMMUT</a>
        <button class="navbar-toggler m-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i> MENU
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active  for-toggler">
                    <a class="nav-link text-light" href="../../dashboard.php">DashBoard</a>
                </li>
                <li class="nav-item for-toggler">
                    <a class="nav-link text-light" href="../../rules.php" target="_blank">Rules</a>
                </li>
                <li class="nav-item for-toggler">
                    <a class="nav-link text-light" target="_blank" href="../../leaderboard.php" target="_blank">LeaderBoard</a>
                </li>
            </ul>
            <span class="navbar-text btn btn-light for-toggler login-btn">
                <a href="../../logout.php" id="forlogin" class="text-dark">
                    LogOut
                </a>
            </span>
        </div>
    </nav>

    <!-- /.container -->
    </nav>
    <header class="intro mt-5">
        <div class="intro-body">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center flex-column" style="height: 90vh;">
                    <div class="col-lg-9  d-flex justify-content-center align-items-center flex-column">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <img class="img-responsive" src="../../img/4.jpg" style="border-radius:25px;padding:0px;">
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="d-flex flex-column justify-content-center" role="form" method="post">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="ans" name="ans" value="1">
                                    </div>
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm mr-5 ml-5" style="border-radius:5px;">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <p class="text-center text-light">techSRIJAN &#169; 2020 | Developed By <a href="#">IEEE SB , MMMUT</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>