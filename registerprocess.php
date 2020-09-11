<?php
session_start();
require_once 'config/connect.php';

if (isset($_POST) & !empty($_POST) & isset($_POST['email']) & !empty($_POST['email']) & isset($_POST['password']) & !empty($_POST['password']) & isset($_POST['username']) & !empty($_POST['username']) & isset($_POST['college']) & !empty($_POST['college']) & isset($_POST['year']) & !empty($_POST['year']) & isset($_POST['contact']) & !empty($_POST['contact'])) {

    $username  =  mysqli_real_escape_string($connection, $_POST['username']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $college  =  mysqli_real_escape_string($connection, $_POST['college']);
    $year  =  mysqli_real_escape_string($connection, $_POST['year']);
    $contact  =  mysqli_real_escape_string($connection, $_POST['contact']);
    $password = md5($_POST['password']);

    $sqll = "SELECT * FROM solver WHERE email='$email'";
    $res = mysqli_query($connection, $sqll);
    $r = mysqli_fetch_assoc($res);

    if ($r < 1) {
        echo $sql = "INSERT INTO solver (username, email, college, year, contact, password, lvl_a, lvl_b, lvl_c, lvl_d, lvl_e, lvl_f, lvl_g, lvl_h, lvl_i, lvl_j) VALUES ('$username', '$email', '$college', '$year', '$contact', '$password', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        if ($result) {
            //echo "User exits, create session";
            $_SESSION['user'] = $email;
            $_SESSION['userid'] = mysqli_insert_id($connection);
            header("location: index.php?message=12");
        } else {
            //$fmsg = "Invalid index Credentials";
            header("location: index.php?message=2");
        }
    } else {
        // echo "Email already Exist Try with a different email";
        header("location: index.php?message=10");
    }
} else {
    header("location: index.php?message=11");
}
