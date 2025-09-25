<?php
$title = "Jour04/Job01";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04/Job01</title>
    <style>
        input[type="text"] {
            margin-bottom: 10px;
            display: block;
        }
    </style>
</head>
<body>
<form method="GET" action="">
        <label>Nom : <input type="text" name="Nom"></label>
        <label>Prénom : <input type="text" name="Prenom"></label>
        <label>Adresse : <input type="text" name="Adresse"></label>
        <label>Email : <input type="text" name="Email"></label>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    $arguments = 0;
    if (!empty($_GET)) {
        $arguments = count($_GET);
        echo "<p>Nombre d'arguments GET reçus : $arguments</p>";
        echo "<ul>";
        foreach ($_GET as $cle => $valeur) {
            echo "<li><strong>$cle</strong> : $valeur</li>";
        }
        echo "</ul>";
    };
    echo "Le nombre d'argument GET envoyé est : $arguments";
    ?>
</body>
</html>