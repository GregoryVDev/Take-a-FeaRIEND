<!-- if ($_POST) {
    if(
        isset($_POST["name"]) &&
        isset($_POST["content"]) &&
        isset($_POST["category"]) &&
        isset($_POST["price"]) &&
        isset($_POST["discount"]) &&
        isset($_POST["images"])
    ) {
        require_once("connect.php");

        $name = strip_tags($_POST["name"]);
        $content = strip_tags($_POST["content"]);
        $category = strip_tags($_POST["category"]);
        $price = strip_tags($_POST["price"]);
        $discount = strip_tags($_POST["discount"]);
        $images = strip_tags($_POST["images"]);

        $sql = "INSERT INTO animaux (name, content, category, price, discount, images) VALUES (:name, :content, :category, :price, :discount, :images)";
        $query = $db->prepare($sql);

        $query->bindValue(":name", $name);
        $query->bindValue(":content", $content);
        $query->bindValue(":category", $category);
        $query->bindValue(":price", $price);
        $query->bindValue(":discount", $discount);
        $query->bindValue(":images", $images);

        $query->execute();

        require_once("close.php");
        
        header("Location: add.php");
        exit()

    }
} -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <title>Take a FeaRIEND</title>
</head>
<body>
    <header class="index-header">
        <img src="/img/logosite.png" height="70px" alt="">
        <nav >
            <ul class="main-nav">
                <li><a href="">Accueil</a></li>
                <li><a href="">Catégories</a></li>
                <li><a href="">A propos</a></li>
            </ul>
        </nav>
        <div class="header-btn">
            <button class="btnlog"><a class="btnloga" href="inscription.php">Connexion S'inscrire</a></button>
        </div>
    </header>

    <div class="bannerOffice"></div>
    <section class="add-panel">


    <div class="card">
        <form method="POST" class="form">
            <div class="left-column">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="category">Catégorie</label>
                    <select name="category" id="category">
                        <option value="animaux domestiques">Animaux domestiques</option>
                        <option value="animaux de sécurités">Animaux de sécurités</option>
                        <option value="animaux dangeureux">Animaux dangeureux</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea name="content" id="content" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="right-column">
                <div class="upload-box">
                    <button type="button" class="upload-btn">Upload</button>
                </div>
            </div>
        </form>
    </div>

    </section>

</body>
</html>