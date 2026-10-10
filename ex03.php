
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Calcul du prix TTC</h1>

    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaireHT = 60;
    $quantite = 3;

    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    $totalTTC += 15;

    echo "<p>Prix unitaire HT : $prixUnitaireHT " . DEVISE . "</p>";
    echo "<p>Quantité : $quantite</p>";
    echo "<p>Total HT : $totalHT " . DEVISE . "</p>";
    echo "<p>TVA : $montantTVA " . DEVISE . "</p>";
    echo "<p>Total TTC : " . ($totalHT + $montantTVA) . " " . DEVISE . "</p>";
    echo "<p>Total avec livraison : $totalTTC " . DEVISE . "</p>";

    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe.</p>";
    }
    ?>
</body>
</html>
