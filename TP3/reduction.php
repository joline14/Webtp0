<?php

if (isset($_POST['btnSubmit'])) {
    $age = $_POST['age'];
    $prix_initial = 100;

    if ($age < 12) {
        $pourcentage = 50;
    } elseif ($age <= 18) {
        $pourcentage = 30;
    } elseif ($age > 60) {
        $pourcentage = 40;
    } else {
        $pourcentage = 0;
    }

    $montant_reduction = $prix_initial * $pourcentage / 100;
    $montant_final = $prix_initial - $montant_reduction;

    echo "Âge : " . $age . "<br>";
    echo "Prix initial : " . $prix_initial . " €<br>";
    echo "Pourcentage de réduction : " . $pourcentage . " %<br>";
    echo "Montant de la réduction : " . $montant_reduction . " €<br>";
    echo "Montant final : " . $montant_final . " €<br>";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie d'un nombre</title>
</head>
<body>

    <form method="post" action="">
        <label for="age">Entrez un âge :</label>
        <input type="number" id="age" name="age" required>
        <button name="btnSubmit" type="submit">Valider</button>
    </form>

</body>
</html>