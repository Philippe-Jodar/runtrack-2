<?php
$title = "Job6";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job6</title>
</head>
<body>
    <?php
    $largeur= 20;
    $hauteur= 10;
    for ($a = 0; $a < $hauteur; $a++) {
    for ($b = 0; $b < $largeur; $b++) {
        echo "*";
    }
    echo "<br>";
}
    ?>
</body>
</html>