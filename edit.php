<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";
$conn= new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    # code...
    die("Connection Failed.");
} else {
    # code...
    echo("Connection Established.");
}

?>