<?php
$servername = "localhost";
$username = "root";
$password = "";
$dtabase = 'trading';

// Create connection
$con = mysqli_connect($servername, $username, $password, $dtabase);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>