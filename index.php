<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="about/about.php">About</a>
                        <a class="nav-link" href="contact/contact.php">Contact</a>
                        <a class="nav-link" href="shop/shop.php">Shop</a>
                        <a class="nav-link" href="login/login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<div id=spacer></div>

<div id=navscroll>
    <a href="#firstcon" class="navscroll_el">Introduction, Stargazing and Vaccum Decay</a>
    <a href="#second_con" class="navscroll_el">Astronomical engineering, Exploratory engineering, and Terraforming</a>
    <a href="#third_con" class="navscroll_el">Closest Stars</a>
</div>




<div class="container">

    <div class="row">


        <?php
        $jsonData = file_get_contents("content.json");
        $contentData = json_decode($jsonData, true);

        shuffle($contentData);
        $contentData = array_slice($contentData, 0, 3);

        foreach ($contentData as $content) {
            echo '<div class="col-12 col-sm-4" id=con_top>';
            echo '<div class="conbox conbox1">';
            echo '<h3 id=firstcon class="font-google2">' . $content['title'] . '</h3>';
            echo '<p>' . $content['description'] . '</p>';
            echo '<img class="img1" src="' . $content['imageSrc'] . '" width="400px">';
            echo '</div>';
            echo '</div>';
        }
        ?>

    </div>

    <div id=spacer2></div>

    <div class="row">
        <div class="col-12">
            <div class="conbox">
                <h3 id="second_con" class="font-google2">Astronomical engineering</h3>
                <p>Engineering on an astronomical scale, or astronomical engineering, i.e., engineering involving operations with whole astronomical objects (planets, stars, etc.), is a known theme in science fiction, as well as a matter of recent scientific research and exploratory engineering.

                    In the Kardashev scale, Type II and Type III civilizations can harness energy on the required scale. This can allow them to construct <span>megastructures.</span>
                </p>
                <hr>
                <h3 class="font-google2">Exploratory engineering</h3>
                <p>Exploratory engineering is a term coined by K. Eric Drexler to describe the process of designing and analyzing detailed hypothetical models of systems that are not feasible with current technologies or methods, but do seem to be clearly within the bounds of what science considers to be possible within the narrowly defined scope of operation of the hypothetical system model. It usually results in paper or video prototypes, or (more likely nowadays) computer simulations that are as convincing as possible to those that know the relevant science, given the lack of experimental confirmation. By analogy with protoscience, it might be considered a form of protoengineering. </p>
                <hr>
                <h3 class="font-google2">Terraforming</h3>
                <p>Terraforming or terraformation (literally, "Earth-shaping") is the hypothetical process of deliberately modifying the atmosphere, temperature, surface topography or ecology of a planet, moon, or other body to be similar to the environment of Earth to make it habitable by Earth-like life.

                    The concept of terraforming developed from both science fiction and actual science. Carl Sagan, an astronomer, proposed the planetary engineering of Venus in 1961, which is considered one of the first accounts of the concept. The term was coined by Jack Williamson in a science-fiction short story ("Collision Orbit") published in 1942 in Astounding Science Fiction, although terraforming in popular culture may predate this work.</p>
                <hr>
                <div class="cent">
                    <img class="img2" src="slike/4.jpg" width="800px" height="400px">
                    <img class="img2" src="slike/5.png" width="800px" height="400px">
                    <img class="img2" src="slike/5.jpg" width="800px" height="400px">
                </div>
            </div>
        </div>
    </div>

    <div id=spacer2></div>

    <div class="row">
        <div class="col-12">
            <div class="conbox overflow-x con2">
                <div class="row">
                    <div class="col-12 col-sm-6" style="overflow-x: auto;">
                        <h1 class="font-google2">Closest Stars</h1>
                        <table>
                            <tr>
                                <td>Star</td>
                                <td>Distance (ly)</td>
                                <td>Stellar Class</td>
                                <td>Mass (M☉)</td>
                            </tr>

                            <tr>
                                <td>Sun</td>
                                <td>0.0000158</td>
                                <td>G2V</td>
                                <td>1</td>
                            </tr>

                            <tr>
                                <td>Proxima Centauri</td>
                                <td>4.2441±0.0011</td>
                                <td>M5.5Ve</td>
                                <td>0.122</td>
                            </tr>

                            <tr>
                                <td>α Centauri A (Rigil Kentaurus)</td>
                                <td rowspan="2">4.3650±0.0068</td>
                                <td>G2V</td>
                                <td>1.100</td>
                            </tr>

                            <tr>
                                <td>α Centauri B (Toliman)</td>

                                <td>K1V</td>
                                <td>0.907</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-sm-2">
                        <img src="slike/7.jpg" class="img4" width="300px" height="300px">
                    </div>

                    <div class="col-12 col-sm-2">
                        <img src="slike/8.jpg" class="img4" width="300px" height="300px">
                    </div>
                    <div class="col-12 col-sm-2">
                        <img src="slike/9.jpg" class="img4" width="300px" height="300px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id=spacer2></div>

<footer id=main-footer>
    <p id="footer-info" style="padding-bottom: 0px;">
        Designed by Mario Vata JMBAG: 0246100824
        <a id=third_con href="https://www.instagram.com/mariovata331/" class="fa fa-instagram footer-links"></a>
        <a href="https://www.github.com/mariovata/" class="fa fa-github footer-links"></a>
        <a href="https://www.linkedin.com/in/mario-vata/" class="fa fa-linkedin footer-links"></a>
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>