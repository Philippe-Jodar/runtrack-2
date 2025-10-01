<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07-Job02</title>
</head>
<body>
  <?php
function bonjour($jour) {
    if ($jour === true) {
        return "Bonjour";
    } else {
        return "Bonsoir";
    }
}
$message = bonjour(true);
// $message2 = bonjour(false);
echo $message;
?>
</body>
</html>