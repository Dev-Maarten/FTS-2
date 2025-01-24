<!doctype html>
<?php require"navbar.php";
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

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $festival_id = (int)$_GET['id'];
} else {
    die("missing id");
}

$query = "SELECT * FROM festivals WHERE id= $festival_id ";
$result = mysqli_query($db, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $festival = mysqli_fetch_assoc($result);

} else {
    die ("festival not found");

}

//$query = " SELECT * FROM festivals WHERE id > 0";
//$result = mysqli_query($db, $query);
//
//$imagepath = '';
//if ($result && mysqli_num_rows($result) > 0) ;
//$row = mysqli_fetch_assoc($result);
//$imagepath = $row ['imagepath'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo htmlspecialchars($festival['name']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex flex-row justify-center items-stretch pt-50 h-[70vh]">
    <div class="w-1/4 bg-gray-300 border-2 border-black">
        <h1>foto</h1>
<!--        --><?// if ($imagepath){ ?>
<!--        <img src="--><?php //echo htmlscpecialchars($imagepath); ?><!--" class="w-full object-cover">"-->
<!--        --><?// } else{ ?>
        <p class="font-bold text-center"> No image available </p> <?  ?>
    </div>
    <div class="flex-grow bg-white">
        <h1>center content</h1>
    </div>
    <div class="w-1/4 bg-gray-300 border-2 border-black">
        <h1>reis</h1>
    </div>


</div>
<a href="booking.php" class="bg-green-500 hover:bg-green-600 text-white text-center font-bold py-2 rounded mb-6">
    boek uw ticket
</body>
</html>
