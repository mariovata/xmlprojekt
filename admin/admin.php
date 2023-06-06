<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laws of the stars</title>
</head>
<body id="main">



<div style="background-color: black;">
    <div>
        <div class="fixed-top">
            <header id="header">
                <h1 class="title"><span class="font-google2">Laws of the stars</span></h1>
                <a href="index-hr.php" class=switch>HR/EN</a>
            </header>
        </div>
    </div>
</div>

<div style="background-color: aliceblue;">
    <div class="container-l">
        <nav class="navbar navbar-expand-lg navbar-light bg-mymenu fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        <a class="nav-link" href="../about/about.php">About</a>
                        <a class="nav-link" href="#">Contact</a>
                        <a class="nav-link" href="../shop/shop.php">Shop</a>
                        <a class="nav-link" href="../login/login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<div id=spacer></div>

<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="conbox contact">

                <?php
                $username = "";
                $password = "";

                if ($_SERVER["REQUEST_METHOD"] === "POST") {

                    $ans = $_POST;

                    if (empty($ans["username"])) {
                        echo "<h1 class='cent text-danger'>Incorrect Credentials.</h1>";
                        exit();

                    } else if (empty($ans["password"])) {
                        echo "<h1 class='cent text-danger'>Incorrect Credentials.</h1>";
                        exit();
                    } else {
                        $username = $ans["username"];
                        $password = $ans["password"];

                        provjera($username, $password);
                    }
                }
                function provjera($username, $password)
                {


                    $xml = simplexml_load_file("../users.xml");


                    foreach ($xml->user as $usr) {
                        $usrn = $usr->username;
                        $usrp = $usr->password;
                        $usrime = $usr->ime;
                        $usrprezime = $usr->prezime;
                        if ($usrn === $username) {
                            if ($usrp === $password) {
                                echo "Logged in as $usrime $usrprezime";
                                $_SESSION["username"] = $username;
                                return;
                            } else {
                                echo "<h1 class='cent text-danger'>Incorrect Credentials.</h1>";
                                $incident = $_SERVER["HTTP_X_FORWARDED_FOR"] . " " . date("d.m.Y") . " " . date("h:i:sa") . " " . "tried to login with incorrect password.";
                                file_put_contents("../incident.txt", $incident . "\n", FILE_APPEND);
                                exit();
                                return;
                            }
                        }
                    }

                    echo "<h1 class='cent text-danger'>Incorrect Credentials.</h1>";
                    $incident = $_SERVER["HTTP_X_FORWARDED_FOR"] . " " . date("d.m.Y") . " " . date("h:i:sa") . " " . "tried to login with incorrect username.";
                    file_put_contents("../incident.txt", $incident . "\n", FILE_APPEND);
                    exit();
                }
                ?>


                <?php


                if (isset($_SESSION["username"])) {
                    $username = $_SESSION["username"];
                    $xml = simplexml_load_file("../users.xml");

                    echo "<table class='table table-dark table-striped table-hover table-bordered'>";
                    echo "<tr><th>Username</th><th>Password</th><th>Name</th><th>Surname</th><th>Edit</th><th>Delete</th></tr>";

                    foreach ($xml->user as $usr) {
                        // create a table of all users with edit and delete buttons
                        $usrn = htmlentities($usr->username);
                        $usrp = htmlentities($usr->password);
                        $usrime = htmlentities($usr->ime);
                        $usrprezime = htmlentities($usr->prezime);

                        echo "<tr><td>$usrn</td><td>$usrp</td><td>$usrime</td><td>$usrprezime</td><td><label>Edit</label></td><td><a href='delete.php?username=$usrn'>Delete</a></td></tr>";
                    }

                    echo "<tr><form action='add.php' method='post'><td><input type='text' name='username' required></td><td><input type='text' name='password' required></td><td><input type='text' name='ime' required></td><td><input type='text' name='prezime' required></td><td><input type='submit' value='Add'></td><td></td></form></tr>";
                    echo "</table>";
                } else {
                    header("Location: ../login/login.php");
                    exit;
                }
                ?>



                <hr>
                <form class="left m-0" action="logout.php" method="post">
                    <input class="btn btn-primary" type="submit" value="Log out">
                </form>
                <hr>

            </div>
        </div>
    </div>
</div>
</div>
<?php
if (isset($_SESSION['refreshed']) && $_SESSION['refreshed']) {
    $_SESSION['refreshed'] = false;
}
?>
<footer id=main-footer>
    <p id="footer-info" style="padding-bottom: 0px;">
        Designed by Mario Vata JMBAG: 0246100824

        <a href="https://www.instagram.com/mariovata331/" class="fa fa-instagram footer-links"></a>
        <a href="https://www.github.com/mariovata/" class="fa fa-github footer-links"></a>
        <a href="https://www.linkedin.com/in/mario-vata/" class="fa fa-linkedin footer-links"></a>

    </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>