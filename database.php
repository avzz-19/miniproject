<?php
    $url='localhost';
    $username='root';
    $password='';
    $mini="teammate";
    $conn=mysqli_connect($url,$username,$password,$mini);
    if(!$conn)
    {
        printf("Error message: %s\n", $mysqli->error);
    }
?>