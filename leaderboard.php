<?php
require_once './config/connect.php';
$sql = "SELECT * FROM solver ORDER BY score DESC, up_time ASC";
$rank = 1;
$sql1 = "SELECT * FROM coder ORDER BY score DESC, up_time ASC";
$rank1 = 1;
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
          <a class="nav-link text-light" href="dashboard.php">DashBoard</a>
        </li>
        <li class="nav-item for-toggler">
          <a class="nav-link text-light" href="rules.php">Rules</a>
        </li>

      </ul>

    </div>
  </nav>

  <!-- navbar ends -->
  <!-- dashboard begin -->

  <section class="container mt-5 pt-5 pb-3 dashboard">
    <h1 class="text-center themes mt-5 mb-5 text-danger"> SOLVER </h2>
      <div class="row">
        <div class="col-12">
          <table class="table text-light">
            <thead>
              <tr>
                <th scope="col">Rank</th>
                <th scope="col">Username</th>
                <th scope="col">Score</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $res = mysqli_query($connection, $sql);
              while ($r = mysqli_fetch_assoc($res)) {
              ?>
                <tr>
                  <th scope="row"><?php echo $rank++; ?></th>
                  <td><?php echo $r['username']; ?></td>
                  <td><?php echo $r['score']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
  </section>


  <section class="container mt-3 pb-5 dashboard">
    <h1 class="text-center themes mt-5 mb-5 text-danger"> CODER</h2>
      <div class="row">
        <div class="col-12">
          <table class="table text-light">
            <thead>
              <tr>
                <th scope="col">Rank</th>
                <th scope="col">Username</th>
                <th scope="col">Score</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $res1 = mysqli_query($connection, $sql1);
              while ($r1 = mysqli_fetch_assoc($res1)) {
              ?>
                <tr>
                  <th scope="row"><?php echo $rank++; ?></th>
                  <td><?php echo $r1['username']; ?></td>
                  <td><?php echo $r1['score']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
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