<?php
session_start();
require_once 'config/connect.php';

if (isset($_POST) & !empty($_POST)) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    echo $email;
    echo $password;
    $sql = "SELECT * FROM solver WHERE email='$email'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    $r = mysqli_fetch_assoc($result);

    if ($count == 1) {

        if (md5($password) == $r['password']) {
            //echo "User exits, create session";
            $_SESSION['user'] = $email;
            $_SESSION['userid'] = $r['id'];
            header("location: dashboard.php");
        } else {
            //$fmsg = "Invalid Login Credentials";
            header("location: index.php?message=1");
        }
    } else {
        header("location: index.php?message=1");
    }
} else {
    echo 'error';
}
