<?php 
    $con = mysqli_connect('localhost','root','','perpus');

    if(mysqli_connect_errno()){
        echo "Failed to connect to database : " . mysqli_connect_error();
    }
?>