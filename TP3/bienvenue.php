<?php

$resultatHtml = '';

if (isset($_POST['btnSubmit'])) {
    $nombre = $_POST['nombre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $resultatHtml .= "Bonjour, $prenom $nom. Vous avez $nombre ans.<br>";

    if ($nombre >= 18) {
        $resultatHtml .= "Vous êtes majeur.<br>";
    } else {
        $resultatHtml .= "Vous êtes mineur.<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="./CSS/bienvenue.css">
</head>
<body>
    <div class="card">
        <h1>Bienvenue</h1>
        <p class="lead">Renseigne tes informations pour vérifier ta majorité.</p>

        <?php echo $resultatHtml; ?>

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