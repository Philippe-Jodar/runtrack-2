<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pair ou impair</title>
</head>
<body>
    <form method="get" action="">
        <label>Nombre : <input type="text" name="nombre"></label><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    // Vérifie que le champ 'nombre' existe dans l'URL (formulaire soumis)
    if (isset($_GET['nombre'])) {

        $nombre = $_GET['nombre'];

        // Vérifie que ce n'est pas vide
        if ($nombre !== "") {

            // Vérifie caractère par caractère si c'est bien un entier
            $est_entier = true;
            $longueur = strlen($nombre);

            for ($i = 0; $i < $longueur; $i++) {
                $car = $nombre[$i];

                if ($i == 0 && $car == '-') {
                    continue; // accepte le signe -
                }

                if ($car < '0' || $car > '9') {
                    $est_entier = false;
                    break;
                }
            }

            if ($est_entier) {
                // Convertit en entier
                $valeur = (int)$nombre;

                if ($valeur % 2 == 0) {
                    echo "<p>$valeur est pair</p>";
                } else {
                    echo "<p>$valeur est impair</p>";
                }
            } else {
                echo "<p>Erreur : ce n'est pas un entier valide.</p>";
            }

        } else {
            echo "<p>Veuillez entrer un nombre.</p>";
        }
    }
    ?>
</body>
</html>