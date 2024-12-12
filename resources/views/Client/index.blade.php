<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Posts</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="{{ asset('images/slideshow/oip_1.jpg')}}"  class="card-img-top" alt="Post 1">
                    <div class="card-body">
                        <h5 class="card-title">Tour d'horizon des façades</h5>
                        <p class="card-text">Présentation du fonctionnement des façades, leurs avantages et inconvénients.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="image2.jpg" class="card-img-top" alt="Post 2">
                    <div class="card-body">
                        <h5 class="card-title">Valider des numéros de téléphone</h5>
                        <p class="card-text">Simplifier la validation des numéros de téléphone dans une application Laravel.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="image3.jpg" class="card-img-top" alt="Post 3">
                    <div class="card-body">
                        <h5 class="card-title">Retour sur la conférence API Platform 2024</h5>
                        <p class="card-text">Résumé de la conférence sur les API tenue en septembre 2024.</p>
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres colonnes de posts ici -->
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
