<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Maison sans base du toit</title>
</head>
<body>
  <h2>Construire une maison</h2>
  <form method="post">
    Largeur : <input type="text" name="largeur" value="<?= isset($_POST['largeur']) ? htmlspecialchars($_POST['largeur']) : '' ?>"><br>
    Hauteur : <input type="text" name="hauteur" value="<?= isset($_POST['hauteur']) ? htmlspecialchars($_POST['hauteur']) : '' ?>"><br>
    <button type="submit">Construire</button>
  </form>
  <pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largeur = isset($_POST['largeur']) ? (int)$_POST['largeur'] : 0;
    $hauteur = isset($_POST['hauteur']) ? (int)$_POST['hauteur'] : 0;

    if ($largeur < 4 || $hauteur < 1 || $largeur % 2 !== 0) {
        echo "Veuillez entrer une largeur paire ≥ 4 et une hauteur ≥ 1.";
    } else {
        $demi = $largeur / 2;
        for ($i = 0; $i < $demi; $i++) {
            $espaces_ext = str_repeat(" ", $demi - $i - 1);
            $contenu = str_repeat("-", $i * 2);
            echo $espaces_ext . "/" . $contenu . "\\" . "\n";
        }
        for ($i = 0; $i < $hauteur; $i++) {
            echo "|" . str_repeat(" ", $largeur - 2) . "|\n";
        }
        echo "|" . str_repeat("_", $largeur - 2) . "|\n";
    }
}
?>
  </pre>
</body>
</html>


