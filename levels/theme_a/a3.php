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

if ($thm_a != 3) {
    header('location: ./a' . $thm_a . '.php');
}
if (!isset($_SESSION['user']) & empty($_SESSION['user'])) {
    header('location: index.php');
}
if (isset($_POST['ans'])) {
    $ans = md5($_POST['ans']);
    $sql = "SELECT * FROM coder WHERE id=1 AND ans3='$ans'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $sql_solver = "UPDATE solver SET thm_a='$thm_a'+1, score='$score'+1 WHERE email='$email'";
        $sql_coder = "UPDATE coder SET score='$c_score'-1 WHERE id=1";
        if (mysqli_query($connection, $sql_solver) & mysqli_query($connection, $sql_coder)) {
            header("location: a4.php");
        }
    } else {
        // header("location: a0.php");
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

    <!-- navbar starts -->
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
                                        <input type="text" class="form-control" id="ans" name="ans" placeholder="Enter Answer" pattern="[a-zA-Z0-9._@ ]+" required>
                                    </div>
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm mr-5 ml-5" style="border-radius:5px;">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 d-flex justify-content-center align-items-center flex-column">
			<div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint1" style="width:250px; border-radius:5px;">Hint 1</button>
							</div>
							</div>
							<div id="hint1" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 1</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;"></div>
									</div>
								</div>
							  </div> <br/>
							  <div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint2" style="width:250px; border-radius:5px;">Hint 2</button>
							</div>
							</div>
							<div id="hint2" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 2</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;"></div>
									</div>
								</div>
							  </div> <br/><div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint3" style="width:250px; border-radius:5px;">Hint 3</button>
							</div>
							</div>
							<div id="hint3" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 3</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;"></div>
									</div>
								</div>
							  </div> <br/><div class="row">
							<div class="col-sm-8 col-lg-offset-4">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint4" style="width:250px; border-radius:5px;">Hint 4</button>
							</div>
							</div>
							<div id="hint4" class="modal fade text-center" role="dialog">
								<div class="modal-dialog modal-md" style="color:#000000;">
									<div class="modal-content">
										<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 4</h4>
										</div>
										<div class="modal-body">
										<br/><p style="color:A9A9A9;">'.$row["hint"].
										'</div>
									</div>
								</div>
								</div>
								<br/><div class="row">
									<div class="col-sm-8 col-lg-offset-4">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hint5" style="width:250px; border-radius:5px;">Hint 5</button>
									</div>
									</div>
									<div id="hint5" class="modal fade text-center" role="dialog">
										<div class="modal-dialog modal-md" style="color:#000000;">
											<div class="modal-content">
												<div class="modal-header" style="background-color:#5F5F5F;border-top-left-radius:4px;border-top-right-radius:4px">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title" style="color:#f5f5f0;"><span class="glyphicon glyphicon-gift"></span> Hint 5</h4>
												</div>
												<div class="modal-body">
												<br/><p style="color:A9A9A9;">'.$row["hint"].
												'</div>
											</div>
										</div>
										</div>
					</div> -->
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