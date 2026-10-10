<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 — Types PHP</title>
</head>
<body>
    <h1>Exercice 4 : Types et conversions</h1>
    <pre><?php
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $valeurNulle = null;

    echo "Valeurs et types initiaux :\n";
    var_dump($entier, $chaine, $decimal, $vrai, $faux, $valeurNulle);

    $chaineEnEntier = (int) $chaine;
    $decimalEnEntier = (int) $decimal;
    $entierEnChaine = (string) $entier;

    echo "\nConversions :\n";
    var_dump($chaineEnEntier, $decimalEnEntier, $entierEnChaine);

    echo "\necho true : ";
    echo $vrai;
    echo "\necho false : ";
    echo $faux;
    echo "\nvar_dump(true et false) :\n";
    var_dump($vrai, $faux);

    echo "\nConversions booléennes :\n";
    var_dump((bool) 0, (bool) "0", (bool) "PHP", (bool) []);
    ?></pre>
</body>
</html>
