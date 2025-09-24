<?php
$title = "Job03";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJob03</title>
</head>
<body>
<?php 
/**Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
(<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
et 50 : souligner.
Afficher “La Plateforme_” à la place de 42. */
for ($x= 0; $x< 101; $x++)
  if ($x == 42)
    {
      echo "La Plateforme_<br>";
  }
  else
if ($x>= 0 && $x<= 20)
  {
        echo "<i>$x</i><br>";
    } else
    if ($x >= 25 && $x <= 50)
      {
        echo "<u>$x</u><br>";
    } else
    {
        echo "$x<br>";
        if ($x=="42")
      {echo "LaPlateforme <br>";}
    }
?>
</body>
</html>