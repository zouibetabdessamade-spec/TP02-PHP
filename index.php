
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP</title>
</head>
<body>
    <h1>TP 02 - Programmation Web 2</h1>
    <h2>Liste des exercices</h2>

    <ul>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            $numero = str_pad($i, 2, "0", STR_PAD_LEFT);
            echo "<li><a href='ex$numero.php'>Exercice $i</a></li>";
        }
        ?>
        <li><a href="ex10_get.html">Exercice 10 - GET</a></li>
        <li><a href="ex10_post.html">Exercice 10 - POST</a></li>
    </ul>
</body>
</html>
