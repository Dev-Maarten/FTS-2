<?php
$host="localhost";
$users="root";
$password="Snoes2425!";
$db="festivals";
$_conn= new mysqli($host,$users,$password,$db);

if($_conn->connect_error){
    echo "error connecting";
}


