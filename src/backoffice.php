<?php

if ($_POST) {
    if (
        isset ($_POST["name"]) &&
        isset($_POST["content"]) &&
        isset($_POST["category"]) &&
        isset($_POST["price"]) &&
        isset($_POST["discount"]) &&
        isset($_POST["content"])
        isset($_POST["content"])
    ) {

    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="./css/produits/produits.css">
    <link rel="stylesheet" href="./css/produits/produitsresponsive.css">
    <title>Take a FeaRIEND</title>
</head>

<body>

    <?php require_once("./template/header.php"); ?>

    <!-- START PANEL AJOUT PRODUITS -->
    <div class="bannerOffice"></div>
    <section class="add-panel">
        <div class="card-add">
            <form method="POST" class="form">
                <div class="left-column">
                    <div class="form-groupcard">
                        <label for="name">Nom:</label>
                        <input type="text" name="name" id="name" placeholder="Nom">
                    </div>
                    <div class="form-groupcard">
                        <label for="category">Catégorie:</label>
                        <select name="category" id="category">
                            <option value="animaux domestiques">Animaux domestiques</option>
                            <option value="animaux de sécurités">Animaux de sécurités</option>
                            <option value="animaux dangeureux">Animaux dangeureux</option>
                            <option value="Happy tree Friends">Happy tree Friends</option>
                        </select>
                    </div>
                    <div class="form-groupcard">
                        <label for="content">Description:</label>
                        <textarea name="content" id="content" placeholder="Description"></textarea>
                    </div>
                    <div class="promotion-checkbox">
                        <label for="promotion">Promotion</label>
                        <input type="checkbox" name="promotion" id="promotion" class="form-check-input">
                    </div>
                </div>
                <div class="right-column">
                    <div class="upload-box">
                        <button type="button" class="upload-btn">Upload</button>
                    </div>
                </div>
                <button class="btn-add" type="submit" value="send"><img src="/img/icons/green-add-button-12023.png" alt=""></button>
            </form>
        </div>
        <div class="Admin-title">
            <h2>ADMINISTRATEUR:</h2>
            <span>Nickname</span>
        </div>
    </section>
    <!-- END PANEL AJOUT PRODUITS -->


    <!-- START TABLEAU ADMINISTRATEUR -->
    <section>
        <div class="container-fluid mt-5 dashboard">
            <div class="row">
                <div class="col-md-3">
                    <img src="/img/godzilla-Paneladmin2.jpg" alt="Bannière" class="img-fluid banner">
                </div>
                <div class="col-md-9">
                    <h2 class="mb-4 admin-board">Liste produits</h2>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Action</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Catégorie</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Promotion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button class="btn btn-primary btn-sm">Voir</button>
                                    <button class="btn btn-warning btn-sm">Modifier</button>
                                    <button class="btn btn-danger btn-sm">Supprimer</button>
                                </td>
                                <td>1</td>
                                <td>Produit A</td>
                                <td>Catégorie 1</td>
                                <td>100€</td>
                                <td><input type="checkbox" class="form-check-input"></td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-primary btn-sm">Voir</button>
                                    <button class="btn btn-warning btn-sm">Modifier</button>
                                    <button class="btn btn-danger btn-sm">Supprimer</button>
                                </td>
                                <td>2</td>
                                <td>Produit B</td>
                                <td>Catégorie 2</td>
                                <td>200€</td>
                                <td><input type="checkbox" class="form-check-input"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- END TABLEAU ADMINISTRATEUR -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<script src="./js/script.js"></script>

</html>