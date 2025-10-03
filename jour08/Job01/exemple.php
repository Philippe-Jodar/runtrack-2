<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemple</title>
</head>
<body>
    <?php
//    Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
//visitée, ajoutez 1. Afficher le contenu de cette variable.
//Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.

// 1) Toujours démarrer la session AVANT tout HTML
session_start();

// 2) Initialiser si première visite
if (isset($_SESSION['compteur'])) {
   $_SESSION['compteur']++; // visites suivantes
} else {
    $_SESSION['compteur'] = 1; // première visite
}

// 3) Afficher la valeur
echo "Nombre de visites (session) : $_SESSION['compteur']";

// 4) Bouton pour remettre à zéro
?>
<form method="post">
    <button type="submit" name="reset">Remettre à zéro</button>
</form>
<?php
// 5) Traitement du reset
if (isset($_POST['reset'])) {
    //$_SESSION['compteur'] = 0; // on remet à zéro
    session_destroy();
    // optionnel : header('Location: index.php'); exit; // pour recharger proprement
}
?>
</body>
</html>