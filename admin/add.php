<?php
session_start();
$isLoggedIn = isset($_SESSION["username"]);

if (!$isLoggedIn) {
    echo "<h1 class='cent text-danger'>Incident reported.</h1>";
    exit();
}


if (isset($_POST["username"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];

    $xml = simplexml_load_file("../users.xml");

    $user = $xml->addChild("user");
    $user->addChild("username", $username);
    $user->addChild("password", $password);
    $user->addChild("ime", $ime);
    $user->addChild("prezime", $prezime);

    file_put_contents("../users.xml", $xml->asXML());

    header("Location: admin.php");
    exit();

}
