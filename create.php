<?php
$servername="localhost";
$username="root";
$password="";
$database="cinemas";
$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    # code...
    die("Failed");
} else {
    # code...
    $title=$_GET['title'];
    $rating=$_GET['rating'];
    $desc=$_GET['description'];
    // echo ($title);
    $sql="INSERT INTO movies (id,title,rating,description) VALUES (null,'$title',$rating,'$desc')";
    $res=$conn->query($sql);
    if ($res===TRUE) {
        # code...
        echo "Added successfully";
        header("location:index.php");
    } else {
        # code...
    }
    
}


?>