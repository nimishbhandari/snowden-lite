<?php
$connection = mysqli_connect('localhost', 'root', '', 'snowden');
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}
