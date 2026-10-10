<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Types et conversions PHP</h1>

    <pre><?php
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;

    var_dump($entier, $chaine, $decimal, $vrai, $faux, $vide);

    $chaineConvertie = (int) $chaine;
    $decimalConverti = (int) $decimal;
    $entierConverti = (string) $entier;

    var_dump($chaineConvertie);
    var_dump($decimalConverti);
    var_dump($entierConverti);

    echo "\nAffichage de true avec echo : ";
    echo true;

    echo "\nAffichage de false avec echo : ";
    echo false;

    echo "\nAvec var_dump : ";
    var_dump(true, false);

    var_dump((bool) 0);
    var_dump((bool) "0");
    var_dump((bool) "PHP");
    var_dump((bool) []);
    ?></pre>
</body>
</html>
