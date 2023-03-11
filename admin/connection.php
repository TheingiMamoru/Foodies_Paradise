<?php 
    //connection
    $host = "localhost";
    $user = "root";
    $pass = "";
	$con=mysqli_connect($host,$user,$pass) or die(mysqli_error());
    //db selection
    mysqli_select_db($con, "foodies_paradise");
?>