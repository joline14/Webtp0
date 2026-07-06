<?php

if (isset($_POST['btnSubmit'])) {
    $nombre = $_POST['nombre'];

    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
       $resultat = $nombre . " est un multiple de 3 et de 5.";
        $classe = "succes";
    } else {
      $resultat = $nombre . " n'est pas un multiple de 3 et de 5.";
        $classe = "erreur";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie d'un nombre</title>
    <link rel="stylesheet" href="./CSS/condition.css">
</head>
<body>

    <form method="post" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" required>
        <button name="btnSubmit" type="submit">Valider</button>
    </form>

    <?php if (isset($resultat)) { ?>
        <div class="resultat <?php echo $classe; ?>">
            <?php echo $resultat; ?>
        </div>
    <?php } ?>
</body>
</html>