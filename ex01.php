<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1 — Affichage PHP</title>
</head>
<body>
    <h1>Exercice 1 : Découverte de PHP</h1>
    <?php
    // Commentaire sur une seule ligne : affichage du message de bienvenue.
    echo "Bienvenue dans mon TP PHP.<br>";

    /*
     * Commentaire sur plusieurs lignes.
     * Les données ci-dessous sont fictives.
     */
    $nom = "Amine";
    $prenom = "Karim";
    $groupe = "G1";

    echo "Nom : " . $nom . "<br>";
    echo "Prénom : " . $prenom . "<br>";
    echo "Groupe : " . $groupe . "<br>";
    ?>
    <p><?= "Je commence à apprendre PHP !" ?></p>
</body>
</html>
