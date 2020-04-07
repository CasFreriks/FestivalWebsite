<?php
session_start();
include_once ("../functions.php");
include_once ("../db/dbconfig.php");
$betaald = $_POST["betaald"];
$currentDate = date("Y-m-d H:i:s");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE bestellingen SET betaald='$betaald', datum='$currentDate' WHERE betaald=0 AND klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
    header("Location: ../../bestellingen.php");
