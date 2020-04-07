<?php
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

if(!empty($voornaam) && !empty($achternaam) && !empty($email) && !empty($tel) && !empty($straatnaam)
&& !empty($huisnummer) && !empty($postcode) && !empty($woonplaats) && !empty($wachtwoord)) {

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO gebruiker (voornaam, tussenvoegsel, achternaam, email, tel, straatnaam, huisnmr, postcode, woonplaats, wachtwoord)
            VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$email', '$tel', '$straatnaam', '$huisnummer', '$postcode', '$woonplaats', '$passwordHash')";

    $query = mysqli_query($con, $sql);

    header ("Location: ../../inlog.php");



} else {
    header ("Location: ../../register.php");
}



?>
