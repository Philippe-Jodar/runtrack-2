<?php
if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie("prenom", $prenom, time() + 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<?php
if (isset($_COOKIE['prenom'])) {
    echo "<p>Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !</p>";
    echo '<form method="post">
            <input type="submit" name="deco" value="Déconnexion">
          </form>';
} else {
    echo '<form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
            <input type="submit" name="connexion" value="Connexion">
          </form>';
}
?>
</body>
</html>