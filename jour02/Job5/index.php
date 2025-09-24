<?php
$title = "Job5";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job5</title>
</head>
<body>
  <?php
  function premier($nombre) {
    if ($nombre < 2) {
        return false;
    }
    for ($x = 2; $x <= sqrt($nombre); $x++) {
        if ($nombre % $x == 0) {
            return false;
        }
    }
    return true;
}
for ($x = 2; $x <= 1000; $x++) {
    if (premier($x)) {
        echo $x . "\n<br>";
    }
}
    ?>
</body>
</html>