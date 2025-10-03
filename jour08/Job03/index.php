<?php
session_start();
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
if (isset($_POST['submit'])) {
    // On valide seulement si prénom non vide
    if (!empty(trim($_POST['prenom']))) {
        $prenom = trim($_POST['prenom']);
        $_SESSION['prenoms'][] = htmlspecialchars($prenom);
    } else {
        $error = "Veuillez saisir un prénom.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion prénoms en session</title>
</head>
<body>
    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : ''; ?>">
        <button type="submit" name="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    <?php if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    } ?>
    <h2>Liste des prénoms :</h2>
    <ul>
        <?php
        if (!empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $p) {
                echo "<li>$p</li>";
            }
        } else {
            echo "<li>Aucun prénom enregistré.</li>";
        }
        ?>
    </ul>
</body>
</html>
