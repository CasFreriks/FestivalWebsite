<?php
session_start();
require_once("../initialize.php");
$voornaam = mysqli_real_escape_string($con, $_POST["voornaam"]);
$tussenvoegsel = mysqli_real_escape_string($con, $_POST["tussenvoegsel"]);
$achternaam = mysqli_real_escape_string($con, $_POST["achternaam"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$tel = mysqli_real_escape_string($con, $_POST["tel"]);
$straatnaam = mysqli_real_escape_string($con, $_POST["straatnaam"]);
$huisnummer = mysqli_real_escape_string($con, $_POST["huisnummer"]);
$postcode = mysqli_real_escape_string($con, $_POST["postcode"]);
$woonplaats = mysqli_real_escape_string($con, $_POST["woonplaats"]);
$wachtwoord = mysqli_real_escape_string($con, $_POST["wachtwoord"]);
$passwordHash =  password_hash($wachtwoord, PASSWORD_DEFAULT);

$sql = "SELECT * FROM gebruiker WHERE klant_id".$_SESSION["klant_id"];
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if(!empty($voornaam) && $row["voornaam"] != $voornaam) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET voornaam='$voornaam' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
    $_SESSION['usr_firstname'] = $_POST['voornaam'];

} else {
    header ("Location: ../../profiel.php");
}

if(!empty($tussenvoegsel) && $row["tussenvoegsel"] != $tussenvoegsel) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET tussenvoegsel='$tussenvoegsel' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
    $_SESSION['usr_prefix'] = $_POST['tussenvoegsel'];

} else {
    header ("Location: ../../profiel.php");
}

if(!empty($achternaam) && $row["achternaam"] != $achternaam) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET achternaam='$achternaam' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
    $_SESSION['usr_lastname'] = $_POST['achternaam'];

} else {
    header ("Location: ../../profiel.php");
}

if(!empty($email) && $row["email"] != $email) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET email='$email' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
    $_SESSION['usr_email'] = $_POST['email'];

} else {
    header ("Location: ../../profiel.php");
}

if(!empty($tel) && $row["tel"] != $tel) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET tel='$tel' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
} else {
    header ("Location: ../../profiel.php");
}

if(!empty($straatnaam) && $row["straatnaam"] != $straatnaam) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET straatnaam='$straatnaam' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
} else {
    header ("Location: ../../profiel.php");
}

if(!empty($huisnummer) && $row["huisnummer"] != $huisnummer) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET huisnmr='$huisnummer' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
} else {
    header ("Location: ../../profiel.php");
}

if(!empty($postcode) && $row["postcode"] != $postcode) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET postcode='$postcode' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
} else {
    header ("Location: ../../profiel.php");
}

if(!empty($woonplaats) && $row["woonplaats"] != $woonplaats) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET woonplaats='$woonplaats' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
} else {
    header ("Location: ../../profiel.php");
}

if(!empty($wachtwoord) && $row["wachtwoord"] != $passwordHash) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "UPDATE gebruiker SET wachtwoord='$passwordHash' WHERE klant_id =". $_SESSION["klant_id"];

    $query = mysqli_query($con, $sql);
} else {
    header ("Location: ../../profiel.php");
}






?>
