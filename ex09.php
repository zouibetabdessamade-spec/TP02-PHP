<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 — Tableau associatif</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #777; padding: 8px 12px; text-align: left; }
    </style>
</head>
<body>
    <h1>Exercice 9 : Notes des étudiants</h1>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme = 0;
    $nombreValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";

    echo "<table>";
    echo "<thead><tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr></thead><tbody>";

    foreach ($notes as $etudiant => $note) {
        $valide = $note >= 10;
        $somme += $note;
        if ($valide) {
            $nombreValides++;
        }
        if ($note > $meilleureNote) {
            $meilleureNote = $note;
            $meilleurEtudiant = $etudiant;
        }

        echo "<tr><td>" . htmlspecialchars($etudiant, ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . $note . "</td>";
        echo "<td>" . ($valide ? "Validé" : "Non validé") . "</td></tr>";
    }

    echo "</tbody></table>";

    $moyenneClasse = $somme / count($notes);
    echo "<p>Somme des notes : " . $somme . "</p>";
    echo "<p>Moyenne de la classe : " . $moyenneClasse . "</p>";
    echo "<p>Nombre d'étudiants ayant validé : " . $nombreValides . "</p>";
    echo "<p>Meilleure note : " . $meilleureNote . ", obtenue par "
        . htmlspecialchars($meilleurEtudiant, ENT_QUOTES, 'UTF-8') . ".</p>";
    ?>
</body>
</html>
