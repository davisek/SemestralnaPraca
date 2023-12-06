<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Domov</title>
    <link rel="stylesheet" href="../../assets/css/style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>

<div class="info">
    <div class="infoContainer container">
        <div class="row py-2">
            <div class="col-6">
                <i class="fi fi-brands-whatsapp"></i>
                <span class="mr-2">+421 905 456</span>
                <i class="fi fi-brands-google"></i>&nbsp;<span>info@gmail.com</span>
            </div>
            <div class="col-6 text-right">
                <a href="https://www.twitter.com"><i class="fi fi-brands-twitter mr-2"></i></a>
                <a href="https://www.facebook.com"><i class="fi fi-brands-facebook mr-2"></i></a>
                <a href="https://www.instagram.com"><i class="fi fi-brands-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbarMenu navbar-dark p-0">
    <div class="container">
        <a class="navbar-brand navLogo" href="../domov/index.php"><img src="../images/pizza-logo.png" alt="logo"><span>Pizza</span> <br> <p class="mb-0">DELIKATESY</p></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="../domov/index.php">Domov</a>
                <a class="nav-link" href="../domov/index.php?#aboutUs">O nás</a>
                <a class="nav-link pr-0" href="../sluzby/sluzby.php">Služby</a>
                <a class="nav-link pr-0" href="../denneMenu/denneMenu.php">Denné menu</a>
                <a class="nav-link pr-0" href="#">Recepty</a>
                <a class="nav-link pr-0" href="#">Blog</a>
                <a class="nav-link pr-0" href="#">Kontakt</a>
            </div>
        </div>
    </div>
</nav>

<div class="mainPage">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 text-lg-right text-center">
                <h2>Ochutnajte</h2>
                <h1>TALIANSKÚ KUCHYŇU</h1>
                <p>Ponúkame až 27 druhov pizze v troch veľkostiach podľa Vášho <br> výberu,
                    veľká(štandardná), malá a maxi. Pripravujeme aj špeciálnu <br> bezlepkovú pizzu.</p>
                <div>
                    <button class="mr-3 mb-3">Objednať</button>
                    <button>Denné menu</button>
                </div>
            </div>
            <div class="col-lg-5 d-flex justify-content-lg-start justify-content-center">
                <img src="../images/bg_1.png" alt="bg">
            </div>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row text-center contactInfo p-3">
            <div class="col-md-4">
                <i class="fi fi-brands-whatsapp"></i>
                <span class="ml-2">+421 905 456</span>
                <p class="">Rozvoz jedla zdarma</p>
            </div>
            <div class="col-md-4">
                <i class="fi fi-brands-ethereum"></i>
                <span>Košecká 839/43</span>
                <p>026 Trenčín <br> GPS: 48.99953, 18.23659</p>
            </div>
            <div class="col-md-4">
                <i class="fi fi-brands-walmart"></i>
                <span>Otváracia doba</span>
                <p>Pondelok-Piatok <br> 9:00 - 23:00</p>
            </div>
        </div>
    </div>
</div>
