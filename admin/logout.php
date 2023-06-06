<?php
session_start();
$isLoggedIn = isset($_SESSION["username"]);

if (!$isLoggedIn) {
    echo "<h1 class='cent text-danger'>Incident reported.</h1>";
    exit();
}

session_unset();
session_destroy();

header("Location: ../index.php");
exit();
?>
