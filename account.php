<?php
session_start();

define('DATABASE_HOST', 'localhost');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', 'Snoes2425!');
define('DATABASE_NAME', 'festivals');
define('APP_URL', 'festivals.localhost');
define('APP_NAME', 'FTS');
$db = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
if (mysqli_connect_errno()) {
    die("connection failed: " . mysqli_connect_error());
}
//$user_data =check_login($con);
if (!isset($_SESSION['username'])) {

    }
$username = $_SESSION['username'];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Punten</title>
</head>
<?php require "navbar.php"; ?>

<body>

<div class="container">
    <h1 class="text-black text-2xl flex justify-center">je bent ingelogd!</h1><br>
    <h1 class="text-black text-1.5xl flex justify-center"> Uw punten:</h1><br>
    <p class="text-black text-1.5xl flex justify-center"> 83/100 </p><br>
    <a href="logout.php" class="text-black text-1xl flex justify-start">logout</a>


</div>
