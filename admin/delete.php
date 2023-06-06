<?php
session_start();
$isLoggedIn = isset($_SESSION["username"]);

if (!$isLoggedIn) {
    echo "<h1 class='cent text-danger'>Incident reported.</h1>";
    exit();
}

if (isset($_GET["username"])) {

    $username = $_GET["username"];

    $xml = simplexml_load_file("../users.xml");

    foreach ($xml->user as $usr) {
        $usrn = $usr->username;
        if ($usrn == $username) {
            $dom = dom_import_simplexml($usr);
            $dom->parentNode->removeChild($dom);
        }
    }

    file_put_contents("../users.xml", $xml->asXML());

    header("Location: admin.php");
    exit();
}
