<!DOCTYPE html>
<html lang="fr">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J4-Job06</title>
    <style>
        table {
            border-collapse: collapse;
            width: 25%;
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
    <!--les requêtes GET récupèrent les données des serveurs,
    tandis que les requêtes POST leur envoient des données.
    POST n’expose pas les données dans l’URL (meilleur pour mots de passe),
    ne garde pas les infos dans l’historique ou logs du serveur, et est
    sémantiquement adapté pour l’envoi de données/effets.-->
<form method="POST">
 <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name= "username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Connexion"></td>
        </tr>
    </table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"] ?? "";
    $pass = $_POST["password"] ?? "";
if ($name === "John" && $pass === "Rambo") {
        echo "<p>C'est pas ma guerre</p>";
    } else {
        echo "<p>Votre pire cauchemar</p>";
    }}
?>
</body>
</html>

