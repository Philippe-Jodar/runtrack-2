<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }

        input[type="text"] {
            width: 100%;
        }

        input[type="submit"] {
            width: 100%;
            padding: 6px;
        }
    </style>
</head>
<body>
<form method="POST">
    <table>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="Nom"></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><input type="text" name="Prénom"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Envoyer"></td>
        </tr>
    </table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
    echo "<h3>Données reçues :</h3>";
    echo "<table>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    foreach ($_POST as $argument => $valeur) {
        $argSafe = htmlspecialchars($argument);
        $valSafe = htmlspecialchars($valeur);
        echo "<tr><td>$argSafe</td><td>$valSafe</td></tr>";
    }
    echo "</table>";
}
?>
</body>
</html>