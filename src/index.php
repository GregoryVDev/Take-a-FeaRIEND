<?php 
    session_start();
    require_once("connect.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/produits/produits.css">
    <link rel="stylesheet" href="./css/produits/produits-responsive.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Take a FeaRIEND</title>
</head>

<body>
    <?php
        print_r($_SESSION);
    ?>
    <section class="intro">
<header>
    <div class="logo">
        <img src="./img/logosite.png" alt="Logo Take a FeaRIEND">
    </div>
    <nav id="nav">
        <ul>
            <div class="container-li">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Catégories</a></li>
                <li><a href="#">A propos</a></li>
            </div>
            <div class="container-button-li">

            <?php if(empty($_SESSION['user'])) { ?>
                <div class="container-button-li">
                    <button type="button" class="Login"><a class="login-link" href="ConnexionUser.php">Login</a></button>
                </div>
            <?php } else { ?>
                <div class="container-button-li">
                    <button type="button" class="Logout"><a class="logout-link" href="DeconnexionUser.php">Logout</a></button>
                </div>
            <?php } ?>


            </div> 
        </ul>
        <div id="burger">
            <img src="./img/burger-bar.png" alt="Menu Burger">
        </div>
    </nav>
</header>



        <article class="text-intro">
            <div>
                <h1 class="title">Take a FeaRIEND</h1>
                <p class="text-content">Bienvenue sur <span class="sub-title">Take a FeaRIEND</span>
                    Votre boutique en ligne pour adopter des Créatures aussi étonnantes qu’amicales.</p>
                <p class="text-content2">*Nous déclinons toutes reponsabilitées en cas de mort brutale</p>
            </div>
        </article>
    </section>

    <section class="category-box">
        <div class="little-box category-1">
            <p>Animaux domestiques</p>
        </div>
        <div class="little-box category-2">
            <p>Animaux de sécurité</p>
        </div>
        <div class="little-box category-3">
            <p>Animaux PRESQUE <br> adoptables</p>
        </div>
    </section>

    <section>
        <div class="produce-box">
            <div class="produces-title">
                <h2>Nos Produits</h2>
            </div>
        </div>

        <article class="produces-cards">
        <div class="container-produce">
            <div class="card-produce">
                <img class="img-produce" src="/img/dangereux/105813.png" alt="Animated Card-produce Hover Effect Html & CSS">
                <div class="intro-produce"><a href="detail.php">
                    <h1 class="text-h1">MousTigre</h1>
                    <p class="text-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rerum laudantium, ad deserunt quibusdam corrupti aut, recusandae alias dolores ex expedita quaerat a in et.
                    </p></a>
                </div>
            </div>

            <div class="card-produce">
                <img class="img-produce" src="/img/dangereux/105605.png" alt="Animated Card-produce Hover Effect Html & CSS">
                <div class="intro-produce">
                    <h1 class="text-h1">ScorBuffle</h1>
                    <p class="text-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rerum laudantium, ad deserunt quibusdam corrupti aut, recusandae alias dolores ex expedita quaerat a in et.
                    </p>
                </div>
            </div>

            <div class="card-produce">
                <img class="img-produce" src="/img/dangereux/105155.png" alt="Animated Card-produce Hover Effect Html & CSS">
                <div class="intro-produce">
                    <h1 class="text-h1">Valion</h1>
                    <p class="text-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rerum laudantium, ad deserunt quibusdam corrupti aut, recusandae alias dolores ex expedita quaerat a in et.
                    </p>
                </div>
            </div>

            <div class="card-produce">
                <img class="img-produce" src="/img/dangereux/105446.png" alt="Animated Card-produce Hover Effect Html & CSS">
                <div class="intro-produce">
                    <h1 class="text-h1">Requare</h1>
                    <p class="text-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rerum laudantium, ad deserunt quibusdam corrupti aut, recusandae alias dolores ex expedita quaerat a in et.
                    </p>
                </div>
            </div>
        </div>
        </article>
    </section>
    
    <section class="discount">
        <div class="discount-pub">
            <div class="discount-left">
                <h4 class="discount-title">DEAL OF THE DAY</h4>
            </div>
            <div class="discount-price">
                <p>30% de réduction</p>
            </div>
            <div class="discount-btn">
                <button class="discount-buy">Acheter</button>
            </div>
        </div>
        <div class="discount-produce">
        <div class="card-produce">
                <img class="img-produce" src="/img/domestiques/105843.png" alt="Animated Card-produce Hover Effect Html & CSS">
                <div class="intro-produce">
                    <h1 class="text-h1">Smileur</h1>
                    <p class="text-p">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis rerum laudantium, ad deserunt quibusdam corrupti aut, recusandae alias dolores ex expedita quaerat a in et.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/script.js"></script>
</body>

<?php
    require_once("./template/footer.php");
?>
