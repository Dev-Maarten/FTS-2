<?php

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

if(isset($_POST['create_new_festival'])) {


    $name = $_REQUEST['name'];
    $location = $_REQUEST['location'];
    $duration = $_REQUEST['duration'];
    $vertrek = $_REQUEST['vertrek'];
    $price = $_REQUEST['price'];
    $description = $_REQUEST['description'];

    $image = $_FILES['image'];
    if ($image['error'] !== UPLOAD_ERR_OK); {
        die("Error uploading file: " .  $image['error']);
    }

    $allowed_types = ['image/jpg', 'image/jpeg', 'image/png'];
    if (!in_array($image['type'], $allowed_types)) {
        die("invalid image type");
    }

    $upload_dir = "uploads/";
    $imagepath = $upload_dir . basename($image['name']);


    if (move_uploaded_file($image['tmp_name'], $imagepath)) {

        $query = "INSERT INTO festivals (name, location, duration, vertrek, price, description, imagepath) VALUES ('$name','$location', '$duration', '$vertrek', '$price', '$description''$imagepath')";


        if (mysqli_query($db, $query)) {
            echo "new festival added successfully";

        } else echo "failed to add new festival";
    }
}
$url ="http://festivals.localhost/admin/adminview.php";
header("Location: $url");
die()
?>

