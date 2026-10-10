<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>
    <h1>Résultat du formulaire POST</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST"
        || !isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {
        echo "<p>Veuillez remplir le formulaire POST puis l'envoyer.</p>";
    } else {
        $nom = trim((string) $_POST["nom"]);
        $prenom = trim((string) $_POST["prenom"]);
        $groupe = trim((string) $_POST["groupe"]);

        if ($nom === "" || $prenom === "" || !in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
            echo "<p>Erreur : veuillez saisir un nom, un prénom et choisir un groupe valide.</p>";
        } else {
            echo "<p>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8')
                . " " . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
                . " du groupe " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . " !</p>";
            echo "<p>Avec POST, les valeurs sont envoyées dans le corps de la requête et ne sont pas ajoutées à l'URL.</p>";
        }
    }
    ?>
    <p><a href="ex10_post.html">Retour au formulaire POST</a></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>
