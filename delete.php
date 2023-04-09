<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";
$conn=new mysqli($servername,$username,$password,$database);

$id=$_GET['id'];


if ($conn->connect_error) {
    # code...
    die("connection failed.");
} else {
    // echo("Connection Established");
    $sql="DELETE FROM movies WHERE id=$id";
    $res=$conn->query($sql);
    if ($res===TRUE) {
        # code...
        echo("Deleted successfully");
        header("location:index.php");//header function is used to redirect to somewhere
    
    } else {
        # code...
        echo("Cannot delete");
    }
    
}
?>