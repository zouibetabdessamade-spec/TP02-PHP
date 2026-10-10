<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 — Variables</title>
</head>
<body>
    <h1>Exercice 2 : Variables et concaténation</h1>
    <?php
    $nom = "Amine";
    $prenom = "Karim";
    $age = 20;
    $formation = "Programmation Web 2";

    $presentation = "Je m'appelle " . $prenom . " " . $nom
        . ", j'ai " . $age . " ans et j'étudie " . $formation . ".";
    $presentation .= " J'apprends PHP.";

    echo "<p>" . htmlspecialchars($presentation, ENT_QUOTES, 'UTF-8') . "</p>";

    $note = 12;
    $Note = 16;
    echo "<p>note = " . $note . "</p>";
    echo "<p>Note = " . $Note . "</p>";
    ?>
</body>
</html>
