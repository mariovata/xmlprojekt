<?php
session_start();
$isLoggedIn = isset($_SESSION["username"]);

if (!$isLoggedIn) {
    echo "<h1 class='cent text-danger'>Incident reported.</h1>";
    // ip address, date, time, incident
    $incident = $_SERVER["HTTP_X_FORWARDED_FOR"] . " " . date("d.m.Y") . " " . date("h:i:sa") . " " . "tried to delete account without logging in";
    // append to file
    file_put_contents("../incident.txt", $incident . "\n", FILE_APPEND);
    exit();
}

if (isset($_GET["username"])) {

    // if username is set to admin, do not delete
    if ($_GET["username"] === "admin") {
        echo "<h1 class='cent text-danger'>Incident reported.</h1>";

        // ip address, date, time, incident
        $incident = $_SERVER["HTTP_X_FORWARDED_FOR"] . " " . date("d.m.Y") . " " . date("h:i:sa") . " " . "tried to delete admin account";
        // append to file
        file_put_contents("../incident.txt", $incident . "\n", FILE_APPEND);
        exit();
    }

    $username = $_GET["username"];

    $xml = simplexml_load_file("../users.xml");

    foreach ($xml->user as $usr) {
        $usrn = $usr->username;
        if ($usrn === $username) {
            $dom = dom_import_simplexml($usr);
            $dom->parentNode->removeChild($dom);
        }
    }

    file_put_contents("../users.xml", $xml->asXML());

    header("Location: admin.php");
    exit();
}
