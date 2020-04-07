<?php
require_once("db/dbconfig.php");

function ticketResult() {
    global $con;

    $sql = "SELECT * FROM tickets";

    $result = $con->query($sql);

    while ($row = $result->fetch_row()) {
        $rows[] = $row;
    }
    $result->close();

    return $rows;
}


function profileResult() {
    global $con;

    $sql = "SELECT * FROM gebruiker WHERE klant_id =".$_SESSION["klant_id"];

    $result = $con->query($sql);

    while ($row = $result->fetch_row()) {
        $rows[] = $row;
    }
    $result->close();

    return $rows;


}


?>