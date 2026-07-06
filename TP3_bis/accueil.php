<?php

session_start();

if (!isset($_SESSION['prenom'])) {
    header('location: formulaire.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="./CSS/formulaire.css">
</head>
<body>
    <div class="card">
        <h1>Accueil</h1>
        <p class="lead">Vous êtes connecté(e) grâce à la session.</p>

        <div class="result">
            Bienvenue, <?php echo $_SESSION['prenom']; ?> !
        </div>

        <a href="deconnexion.php" class="btn-link">Déconnexion</a>
    </div>
</body>
</html>