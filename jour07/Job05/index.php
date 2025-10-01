<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour07-Job05</title>
</head>
<body>
    <?php
$str = "Abracadabra";
$char = "a";
$nb_occurrences = substr_count($str, $char);
echo "La lettre '$char' apparaît $nb_occurrences fois dans la chaîne '$str'.";
?>
</body>
</html>