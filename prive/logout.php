<?php
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location: ../index.php"); //to redirect back to "inlog.php" after logging out
exit();

?>