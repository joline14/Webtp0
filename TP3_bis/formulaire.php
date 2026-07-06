<?php

session_start();


if (isset($_POST['btnSubmit'])) {
    $nombre = $_POST['nombre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $_SESSION['nombre'] = $nombre;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;

    header('location: accueil.php');
    exit();


}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="./CSS/formulaire.css">
</head>
<body>
    <div class="card">
        <h1>Bienvenue</h1>
        <p class="lead">Saisissez vos informations.</p>


        <form method="post" action="">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div>
                <label for="nombre">Âge</label>
                <input type="number" id="nombre" name="nombre" required min="0">
            </div>
            <button name="btnSubmit" type="submit">Valider</button>
        </form>
    </div>
</body>
</html>