<?php
    //On vérifie si le formulaire a était envoyé 
    if(!empty($_POST)){
        if(isset($_POST["email"], $_POST["pass"])
        && !empty($_POST["email"]) && !empty($_POST["pass"])){

        }if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){ 
              //filter_var et FILTER_VALIDATE_EMAIL servent a sécuriser l'adresse mail en back-end
                die("L'adresse eMail est incorrecte");
            }
        }
            //On se connecte a la BDD
            require_once("connect.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fonts.css">
</head>
<body>
    <section class="full-box">
    <h1 class="font-take">Take a FeaRIEND</h1>
    <form method="POST" class="p-4 p-md-5 border rounded-3 bg-body-tertiary center-form">
        <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
        </div>
        <div class="form-floating mb-3">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                <label for="pass">Password</label>
        </div>
        <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
        <hr class="my-4">
        <small class="text-body-secondary">Si vous ne possédez pas de compte cliquer sur <a href="inscription.php">S'enregistrer</a>.</small>
    </form>


    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>