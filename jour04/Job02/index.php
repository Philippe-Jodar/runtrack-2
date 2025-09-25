<?php
$title = "J4/Job02";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J4-Job02</title>
    
</head>
<body>
<h2>Formulaire</h2>

    <form method="get" action="">
        <label>Nom : <input type="text" name="nom"></label><br><br>
        <label>Prénom : <input type="text" name="prenom"></label><br><br>
        <label>Email : <input type="text" name="email"></label><br><br>
        <label>Ville : <input type="text" name="ville"></label><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Vérifie s’il y a des paramètres GET
    if (!empty($_GET)) {
        echo "<h3>Paramètres reçus :</h3>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";

        // Parcours chaque argument GET
        foreach ($_GET as $argument => $valeur) {
            echo "<tr>";
            echo "<td>" . $argument . "</td>";
            echo "<td>" . $valeur . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>