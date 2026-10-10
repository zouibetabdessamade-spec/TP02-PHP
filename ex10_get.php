<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
    <h1>Résultat du formulaire GET</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] !== "GET"
        || !isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {
        echo "<p>Veuillez remplir le formulaire GET puis l'envoyer.</p>";
    } else {
        $nom = trim((string) $_GET["nom"]);
        $prenom = trim((string) $_GET["prenom"]);
        $groupe = trim((string) $_GET["groupe"]);

        if ($nom === "" || $prenom === "" || !in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
            echo "<p>Erreur : veuillez saisir un nom, un prénom et choisir un groupe valide.</p>";
        } else {
            echo "<p>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8')
                . " " . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
                . " du groupe " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . " !</p>";
            echo "<p>Avec GET, les valeurs apparaissent dans l'URL après le signe ?.</p>";
        }
    }
    ?>
    <p><a href="ex10_get.html">Retour au formulaire GET</a></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
