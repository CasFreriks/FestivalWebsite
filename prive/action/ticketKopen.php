 <?php
session_start();
include_once ("../functions.php");
include_once ("../db/dbconfig.php");
$aantal = $_POST["ticket_aantal"];
$prijs = $_POST["ticket_prijs"];
$totaalPrijs = $aantal * $prijs;
$ticketID = $_POST["ticket_id"];
$klantID = $_POST["klant_id"];

if (!empty($aantal) || !empty($prijs) || !empty($ticketID) || !empty($klantID)) {
    $sql = "INSERT INTO bestellingen (klant_id, ticket_id, aantal, totaalprijs )
            VALUES ('$klantID', '$ticketID', '$aantal', '$totaalPrijs')";

    $query = mysqli_query($con, $sql);
    header("Location: ../../winkelmand.php");
} else {
    header("Location: ../../index.php");
}




?>

