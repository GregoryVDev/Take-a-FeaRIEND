<?php

session_start();

require_once("./connect.php");

$sql = "SELECT * FROM animaux";

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
if ($_POST) {
    if (
        isset($_POST["name"]) &&
        isset($_POST["content"]) &&
        isset($_POST["category"]) &&
        isset($_POST["price"]) &&
        isset($_POST["promotion"])
    ) {

        require_once("connect.php");

        $name = strip_tags($_POST["name"]);
        $content = strip_tags($_POST["content"]);
        $category = strip_tags($_POST["category"]);
        $price = strip_tags($_POST["price"]);
        $discount = strip_tags($_POST["promotion"]);


        $sql = "INSERT INTO animaux (name, content, category, price, promotion ) VALUES (:name, :content, :category, :price, :promotion)";

        $query = $db->prepare($sql);

        $query->bindValue(":name", $name);
        $query->bindValue(":content", $content);
        $query->bindValue(":category", $category);
        $query->bindValue(":price", $price);
        $query->bindValue(":promotion", $promotion);

        $query->execute();

        require_once("./close.php");

        header("Location: backoffice.php");
        exit();
    } else {
        var_dump($_POST);
        die("marche pas");
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
    <link rel="stylesheet" href="./css/produits/produits-responsive.css">
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
                        <input type="text" name="name" id="name" placeholder="Nom" required>
                    </div>
                    <div class="form-groupcard">
                        <label for="price">Prix:</label>
                        <input type="text" name="price" id="price" placeholder="price" required>
                    </div>
                    <div class="form-groupcard">
                        <label for="category">Catégorie:</label>
                        <select name="category" id="category" required>
                            <option value="animaux domestiques">Animaux domestiques</option>
                            <option value="animaux de sécurités">Animaux de sécurités</option>
                            <option value="animaux dangeureux">Animaux dangeureux</option>
                            <option value="Happy tree Friends">Happy tree Friends</option>
                        </select>
                    </div>
                    <div class="form-groupcard">
                        <label for="content">Description:</label>
                        <textarea name="content" id="content" placeholder="Description" required></textarea>
                    </div>
                    <div class="promotion-checkbox">
                        <label for="promotion">Promotion</label>
                        <input type="checkbox" name="promotion" id="promotion" class="form-check-input">
                    </div>
                </div>
                <div class="right-column">
                    <div class="upload-box">
                        <label for="image" class="upload-btn">Upload</label>
                        <input type="file" name="image" id="image" accept="image/*" style="display: none;">

                    </div>
                </div>
                <button type="submit" class="upload-btn" name="btn-add">
                    <img src="/img/icons/green-add-button-12023.png" alt="">
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
                        <?php foreach ($result as $animaux) : ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="btn btn-primary btn-sm"> <a href="detail.php?id=<?= $animaux["id"] ?>"></a>Voir</button>
                                        <button class="btn btn-warning btn-sm"><a href="edit.php?id=<?= $animaux["id"] ?>"></a>Modifier</button>
                                        <button class="btn btn-danger btn-sm"> <a href="delete.php?id=<?= $animaux["id"] ?>"></a>Supprimer</button>
                                    </td>
                                    <td><?= $animaux['name'] ?></td>
                                    <td><?= $animaux['content'] ?></td>
                                    <td><?= $animaux['category'] ?></td>
                                    <td><?= $animaux['price'] ?></td>
                                    <td><?= $animaux['discount'] ?></td>
                                    <!-- <button class="btn btn-primary btn-sm">Voir</button>
                                    <button class="btn btn-warning btn-sm">Modifier</button>
                                    <button class="btn btn-danger btn-sm">Supprimer</button>
                                </td>
                                <td>1</td>
                                <td>Produit A</td>
                                <td>Catégorie 1</td>
                                <td>100€</td>
                                <td><input type="checkbox" class="form-check-input"></td> -->
                                </tr>
                                <tr>
                                    <!-- <td>
                                    <button class="btn btn-primary btn-sm">Voir</button>
                                    <button class="btn btn-warning btn-sm">Modifier</button>
                                    <button class="btn btn-danger btn-sm">Supprimer</button>
                                </td>
                                <td>2</td>
                                <td>Produit B</td>
                                <td>Catégorie 2</td>
                                <td>200€</td>
                                <td><input type="checkbox" class="form-check-input"></td> -->
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
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