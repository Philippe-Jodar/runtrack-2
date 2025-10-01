<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour07-Job04</title>
</head>
<body>
    <?php
function calcule($a, $operation, $b) {
    if ($operation == "+") {
        return $a + $b;
    } else if ($operation == "-") {
        return $a - $b;
    } else if ($operation == "*") {
        return $a * $b;
    } else if ($operation == "/") {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erreur : division par zéro";
        }
    } else if ($operation == "%") {
        if ($b != 0) {
            return $a % $b;
        } else {
            return "Erreur : module par zéro";
        }
    } else {
        return "Erreur : opération inconnue";
    }
}
echo calcule(7, "*", 6);
    ?>
</body>
</html>