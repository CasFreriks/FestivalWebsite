<?php
//connect to mysql database
$con = mysqli_connect("localhost", "admin", "Oempdhnmikema*11", "festivalherres") or die("Error " . mysqli_error($con));

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>
