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
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul de réduction</title>
    <link rel="stylesheet" href="./CSS/reduction.css">
</head>
<body>

    <div class="container">
        <h1>Calcul de réduction</h1>
        <p class="subtitle">Entrez un âge pour connaître le tarif</p>

        <form method="post" action="">
            <div class="form-group">
                <label for="age">Âge</label>
                <input type="number" id="age" name="age" required>
            </div>
            <button name="btnSubmit" type="submit">Calculer</button>
        </form>

        <?php if (isset($montant_final)) { ?>
            <div class="recap">
                <h2>Récapitulatif</h2>
                <div class="ligne"><span>Âge</span><span><?php echo $age; ?> ans</span></div>
                <div class="ligne"><span>Prix initial</span><span><?php echo $prix_initial; ?> €</span></div>
                <div class="ligne"><span>Réduction</span><span><?php echo $pourcentage; ?> %</span></div>
                <div class="ligne"><span>Montant réduit</span><span>-<?php echo $montant_reduction; ?> €</span></div>
                <div class="ligne"><span>Montant final</span><span><?php echo $montant_final; ?> €</span></div>
            </div>
        <?php } ?>
    </div>

</body>
</html>