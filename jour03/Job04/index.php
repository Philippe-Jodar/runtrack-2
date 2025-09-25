<?php
$title = "Job04";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job04</title>
</head>
<body>
    <?php
$str = "Dans l'espace, personne ne vous entend crier";
$nombre=0;
while (isset($str[$nombre])) {
    $nombre++;
}
echo "Dans l'espace, personne ne vous entend crier <br>";
echo "Nombre de caractères " . $nombre;
    ?>
</body>
</html>