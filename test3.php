<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motif Croisé</title>
    <style>
        /* Style pour améliorer la lisibilité du motif dans le navigateur */
        pre {
            font-family: monospace;
            font-size: 16px;
        }
    </style>
</head>
<body>

<?php
// Activer l'affichage des erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Définir la taille du motif (doit être un nombre impair pour avoir un centre)
define('SIZE', 11);  // Taille 11 pour le test

// Afficher la taille du motif (pour débogage)
echo "Taille du motif: " . SIZE . "<br>";

// Utilisation de 'pre' pour afficher le motif avec des espaces et sans compression de texte
echo "<pre>";

// Boucle pour créer le motif
for ($a = 0; $a < SIZE; $a++) {
    for ($b = 0; $b < SIZE; $b++) {
        // Afficher '*' pour les conditions du motif
        if ($b == $a || $b == (SIZE - $a - 1) || $a == (SIZE / 2)) {
            echo "#";
        } else {
            echo " ";
        }
    }
    echo "<br>";  // Nouvelle ligne après chaque ligne du motif
}

echo "</pre>";

?>

</body>
</html>
