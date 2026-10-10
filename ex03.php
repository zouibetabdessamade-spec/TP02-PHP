<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 — Constantes et calculs</title>
</head>
<body>
    <h1>Exercice 3 : Calcul du prix TTC</h1>
    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaireHT = 60;
    $quantite = 3;
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;
    $totalFinal = $totalTTC;
    $totalFinal += 15;

    echo "<ul>";
    echo "<li>Prix unitaire HT : " . $prixUnitaireHT . " " . DEVISE . "</li>";
    echo "<li>Quantité : " . $quantite . "</li>";
    echo "<li>Total HT : " . $totalHT . " " . DEVISE . "</li>";
    echo "<li>TVA (" . TAUX_TVA . " %) : " . $montantTVA . " " . DEVISE . "</li>";
    echo "<li>Total TTC : " . $totalTTC . " " . DEVISE . "</li>";
    echo "<li>Frais de livraison : 15 " . DEVISE . "</li>";
    echo "<li>Montant final : " . $totalFinal . " " . DEVISE . "</li>";
    echo "</ul>";

    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA est définie.</p>";
    }
    ?>
</body>
</html>
