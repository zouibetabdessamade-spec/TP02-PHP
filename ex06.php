<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 — Switch et mois</title>
</head>
<body>
    <h1>Exercice 6 : Nom du mois</h1>
    <?php
    // Pour tester les valeurs demandées, remplacer cette ligne par $numeroMois = 3, etc.
    $numeroMois = 3;

    function afficherMois(int $numeroMois): string {
        switch ($numeroMois) {
            case 1: return "Janvier";
            case 2: return "Février";
            case 3: return "Mars";
            case 4: return "Avril";
            case 5: return "Mai";
            case 6: return "Juin";
            case 7: return "Juillet";
            case 8: return "Août";
            case 9: return "Septembre";
            case 10: return "Octobre";
            case 11: return "Novembre";
            case 12: return "Décembre";
            default: return "Numéro de mois invalide";
        }
    }

    echo "<p>Numéro " . $numeroMois . " : " . afficherMois($numeroMois) . "</p>";

    $moisCourant = (int) date("m");
    echo "<p>Mois courant du serveur : " . afficherMois($moisCourant) . "</p>";
    ?>
</body>
</html>
