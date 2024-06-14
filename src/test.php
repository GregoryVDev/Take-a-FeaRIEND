<?php
session_start();
require_once("connect.php");

// Vérifier si l'ID de l'animal est fourni dans l'URL
if (!isset($_GET['id'])) {
    die('ID not provided');
}

$id = $_GET['id'];

$sql = "SELECT * FROM animaux WHERE id = :id";
$requete = $db->prepare($sql);
$requete->bindValue(":id", $id, PDO::PARAM_INT);
$requete->execute();

$animal = $requete->fetch(PDO::FETCH_ASSOC);

if (!$animal) {
    die('Animal not found');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/detail.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Détails de <?= htmlspecialchars($animal["name"], ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
    <?php require_once("./template/header.php"); ?>

    <section class="detail-section">
        <div class="container">
            <h2>Détails de <?= htmlspecialchars($animal["name"], ENT_QUOTES, 'UTF-8') ?></h2>
            <div class="detail-card">
                <img src="/img/dangereux/105813.png" alt="Image de l'animal">
                <div class="details">
                    <p><?= htmlspecialchars($animal["content"], ENT_QUOTES, 'UTF-8') ?></p>
                    <!-- Autres détails de l'animal ici -->
                </div>
            </div>
        </div>
    </section>

    <script src="/js/script.js"></script>
</body>
</html>

<?php require_once("./template/footer.php"); ?>
