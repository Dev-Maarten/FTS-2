<?php require "navbar.php";
$query = 'INSERT INTO  users(username, password) VALUES($username, $password)';
$username = $_POST['username'];
        $password = $_POST['Password'];?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Stylesheet" href="styles.css">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container" id="signup">
    <h1 class="form-title">registreren</h1>
    <form method="post" action="account.php" enctype="multipart/form-data">>
        <div class="input-group">
            <label for="username">username</label>
            <input type="text" name="username" id="fname" placeholder="voornaam" required>

        </div>

        <div class="input-group">
            <label for="E-mail">E-mail</label>
            <input type="text" name="E-mail" id="E-mail" placeholder="E-mail" required>

        </div>

        <div class="input-group">
            <label for="Password">Password</label>
            <input type="text" name="Password" id="Password" placeholder="password" required>

        </div>

        <form action="account.php">
            <input formaction="account.php" type="submit" class="button" value="registreer"> </form>

    </form>
    <div class="links">
        <p> heb je al een account?</p>
        <a href="login.php">log in</a>
    </div>
</div>

</body>
</html>
