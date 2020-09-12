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
    <style>
        body {
            height: unset;
        }
    </style>
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
                    <a class="nav-link text-light" href="index.html">Home</a>
                </li>
                <li class="nav-item for-toggler">
                    <a class="nav-link text-light" href="leaderboard.php">Leaderboard</a>
                </li>
                <li class="nav-item for-toggler">
                    <a class="nav-link text-light" href="contactus.html">Contact Us</a>
                </li>
            </ul>

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
                    <form>
                        <div class="form-row">
                            <div class="form-group col-12 col-md-8 mx-auto mt-3">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                            </div>

                            <div class="form-group col-12 col-md-8 mx-auto mt-3">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                            </div>

                            <div class="col-12 col-md-8 mx-auto mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me
                                    </label>
                                </div>
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

    <div class="container d-flex flex-column justify-content-center align-items-center mt-3 pt-3 mb-3 intro-body">

        <h2 class="text-center text-danger themes">Rules</h2>
        <ul class="text-light rules" style="list-style: none;background:rgba(0, 0, 0, 0.66)">
            <li class="pt-4">
                Coder will get each time -1 Point each time someone solves their level.
            </li>
            <li class="pt-4">
                Solver will get +1 Point each time they solve a level.
            </li>
            <li class="pt-4">
                Anyone caught using any of the unfair means will be disqualified.
            </li>
            <li class="pt-4">
                Anyone entering wrong information in the registration form will be disqualified.
            </li>
        </ul>
    </div>

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