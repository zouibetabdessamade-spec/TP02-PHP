<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP 02 PHP — Accueil</title>
</head>
<body>
    <h1>TP 02 — Programmation Web 2</h1>
    <p>Choisissez un exercice :</p>
    <ol>
        <?php for ($i = 1; $i <= 9; $i++): ?>
            <li><a href="ex<?= sprintf('%02d', $i) ?>.php">Exercice <?= $i ?></a></li>
        <?php endfor; ?>
        <li><a href="ex10_get.html">Exercice 10 — Formulaire GET</a></li>
        <li><a href="ex10_post.html">Exercice 10 — Formulaire POST</a></li>
    </ol>
</body>
</html>
