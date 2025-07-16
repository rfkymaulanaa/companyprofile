<?php
$servername = "localhost";
$dbname = "companyprofile";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



function cekLogin() {
    if (!isset($_SESSION['login'])) {
    header("Location: login.html");
}
}
?>
