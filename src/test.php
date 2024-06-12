<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Administrateur</title>
    <!-- Inclure le CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .banner {
            width: 100%;
            max-width: 800px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="/img/godzilla-Paneladmin2.jpg" alt="Bannière" class="img-fluid banner">
            </div>
            <div class="col-md-8">
                <h2 class="mb-4">Tableau Administrateur</h2>
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
                        <!-- Ajouter d'autres lignes ici -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Inclure le JS de Bootstrap et les dépendances -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
