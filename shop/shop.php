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
                      <a class="nav-link" href="../contact/contact.php">Contact</a>
                      <a class="nav-link" href="#">Shop</a>
                        <a class="nav-link" href="../login/login.php">Login</a>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
        </div>    
    
    <div id=spacer></div>

    <div class="container">

        <div class="d-flex justify-content-center align-items-center flexban">
            <div class="banner1">
                Items On SALE! Receive a free mug with purchases over $400!
            </div>
            
        </div>


        <div class="d-flex flex-wrap justify-content-center">

        <?php
        $xml = simplexml_load_file('products.xml');

        foreach ($xml->product as $product) {
            $name = $product->name;
            $image = $product->image;
            $price = $product->price;
            $salePrice = $product->salePrice;
            $description = $product->description;
            ?>

            <div class="flexcon">
                <h3 class="p-2 text-center font-google2"><?= $name ?></h3>
                <div class="d-flex justify-content-center">
                    <img src="<?= $image ?>" width="400px" height="225px">
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <?php if(!empty($salePrice)): ?>
                        <h3 class="p-2">Price: <span class="strike"><?= $price ?></span> <span class="bprice"><?= $salePrice ?></span></h3>
                    <?php else: ?>
                        <h3 class="p-2">Price: <?= $price ?></h3>
                    <?php endif; ?>
                    <button class="m-2 btn btn-outline-secondary">Add to cart</button>
                </div>
                <hr>
                <p class="p-4"><?= $description ?></p>
            </div>

            <?php
        }
        ?>
        </div>
    </div>


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