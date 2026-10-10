
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Variables et concaténation</h1>

    <?php
    $nom = "Amine";
    $prenom = "Karim";
    $age = 20;
    $formation = "Programmation Web";

    $presentation = "Je m'appelle " . $prenom . " " . $nom
                  . ", j'ai " . $age . " ans et j'étudie "
                  . $formation . ".";

    $presentation .= " J'apprends PHP.";

    echo "<p>$presentation</p>";

    $note = 12;
    $Note = 16;

    echo "<p>Note : $note</p>";
    echo "<p>Note avec N majuscule : $Note</p>";
    ?>
</body>
</html>
