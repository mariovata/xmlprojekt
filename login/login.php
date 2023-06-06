<?php

session_start();

$isLoggedIn = isset($_SESSION["username"]);


if ($isLoggedIn) {
    header("Location: ../admin/admin.php");
    exit();
}
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
            <div class="conbox contact" style="width: 40rem;margin: 0 auto;">
                <img class=cont_ico src="../slike/Quasar_Server.png">
                <img class=cont_ico2 src="../slike/Quasar_Server.png">
                <form class="cent" action="../admin/admin.php" method="post">
                    <table>
                        <tr>
                            <td>
                                <label class="fw-bold">Username:</label>
                            </td>
                            <tr>
                            <td>
                                <input id="name" name="username" type="text" placeholder="Enter username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="fw-bold">Passowrd:</label>
                            </td>
                            <tr>
                            <td>
                                <input id="password" name="password" placeholder="Enter password" type="password">
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <input class="btn btn-primary w-100" name="submit" type="submit" value=" Login ">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </div>
</div>
</div>

<div class="cent">
    <div class="central-body">
    </div>
    <div class="objects">
        <img class="object_rocket" src="http://salehriaz.com/404Page/img/rocket.svg" width="40px">
        <div class="earth-moon">
            <img class="object_earth" src="http://salehriaz.com/404Page/img/earth.svg" width="100px">
            <img class="object_moon" src="http://salehriaz.com/404Page/img/moon.svg" width="80px">
        </div>
        <div class="box_astronaut">
            <img class="object_astronaut" src="http://salehriaz.com/404Page/img/astronaut.svg" width="140px">
        </div>
    </div>

</div>

<div id=spacer></div>

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