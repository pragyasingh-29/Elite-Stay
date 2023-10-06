<?php
$conn = mysqli_connect("localhost","root","","login_sample_db") or die("connection failed" . mysqli_connect_error());

session_start();
unset($_SESSION['username']);
unset($_SESSION['admin_id']);
session_destroy();
header("Location:http://localhost/New%20folder/index.php");

?>