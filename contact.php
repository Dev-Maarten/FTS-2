<?php
define('DATABASE_HOST', 'localhost');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', 'Snoes2425!');
define('DATABASE_NAME', 'users');
define('APP_URL', 'festivals.localhost');
define('APP_NAME', 'FTS');
$db = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
if (mysqli_connect_errno()) {
    die("connection failed: " . mysqli_connect_error());
}
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" href="styles.css">
    <script src="script.js"></script>
    <title>Contact</title>
</head>
<body>
<?php require "navbar.php"; ?>
<div class="container" id="signup">
    <h1 class="form-title">Contact</h1>
    <form method="post" action="">
        <div class="input-group">
            <label for="fname">voornaam</label>
            <input type="text" name="fname" id="fname" placeholder="voornaam" required>

        </div>

        <div class="input-group">
            <label for="lname">achternaam</label>
            <input type="text" name="lname" id="lname" placeholder="achternaam" required>

        </div>

        <div class="input-group">
            <label for="E-mail">E-mail</label>
            <input type="text" name="E-mail" id="E-mail" placeholder="E-mail" required>

        </div>
        <div class="input-group">
            <label for="message">bericht</label>
            <input type="text" name="message" id="message" placeholder="Bericht" required>

        </div>

        <form action="index.html">
            <input formaction="index.html" type="submit" class="button" value="Verzenden"> </form>

</body>
</html>