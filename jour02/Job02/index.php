<?php
$title = "Job02";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
    <?php
    /**Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />). */

for ($x = 0; $x <= 1337; $x++){
  if ($x == 1338) break;
  if ($x == 26) continue;
  if ($x == 37) continue;
  if ($x == 88) continue;
  if ($x == 1111) {continue;}
  echo "$x <br>";
}
?>
</body>
</html>