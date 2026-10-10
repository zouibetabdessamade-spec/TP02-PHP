# TP 02 — Programmation Web 2 (PHP)
**Année universitaire : 2026/2027**

- **Nom :** ZOUIBET
- **Prénom :** ABDESSAMAD
- **Groupe :** 01
- **Titre :** TP 02 — PHP

## Liste des exercices
1. `ex01.php` — HTML/PHP, commentaires et affichage
2. `ex02.php` — Variables, casse, concaténation et `.`
3. `ex03.php` — Constantes, calculs et affectation composée
4. `ex04.php` — Types et conversions
5. `ex05.php` — Conditions et moyenne
6. `ex06.php` — `switch` et mois
7. `ex07.php` — Boucles `for`, table de multiplication et pyramide
8. `ex08.php` — `while`, `do-while`, `continue` et `break`
9. `ex09.php` — Tableau associatif et statistiques
10. `ex10_get.html`, `ex10_get.php`, `ex10_post.html`, `ex10_post.php` — Formulaires GET et POST

## Exécution locale
Ouvrir un terminal à la racine du projet et lancer :

```bash
php -S localhost:8000
```

Avec XAMPP sous Windows si PHP n'est pas dans le PATH :

```powershell
& "C:\\xampp\\php\\php.exe" -S localhost:8000
```

Puis ouvrir http://localhost:8000/index.php dans le navigateur. Arrêter le serveur avec `Ctrl+C`.

## Réponses courtes demandées

### Exercice 2 : variables valides
Les variables PHP distinguent les majuscules et les minuscules : `$note` et `$Note` sont différentes. Les noms valides parmi la liste sont `$a`, `$_a`, `$a_a`, `$AAA` et `$a1`. `$a!` est invalide car `!` n'est pas autorisé dans le nom ; `$1a` est invalide car un nom ne peut pas commencer par un chiffre.

### Exercice 4 : `echo` et `var_dump()`
`echo true` affiche `1`, tandis que `echo false` n'affiche rien. `var_dump(true)` affiche `bool(true)` et `var_dump(false)` affiche `bool(false)`, ce qui permet de voir explicitement la valeur et son type.

### Exercice 5 : tests de moyenne
- `-1` → Note invalide
- `9` → Non validé
- `10` → Passable
- `12` → Assez bien
- `14` → Bien
- `16` → Très bien
- `21` → Note invalide

### Exercice 10 : GET et POST
Avec GET, les données du formulaire apparaissent dans la chaîne de requête de l'URL après le caractère `?`. Avec POST, les données du formulaire ne sont pas ajoutées à l'URL : elles sont envoyées dans le corps de la requête. POST ne chiffre pas les données à lui seul ; HTTPS est nécessaire pour protéger le transport.

## Publication Git
Après avoir testé chaque exercice, enregistrer les fichiers, puis effectuer un commit distinct et un push conformément aux consignes du TP. Pour l'exercice 10, publier les quatre fichiers dans un seul commit.
