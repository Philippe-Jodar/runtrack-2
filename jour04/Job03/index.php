<?php
$title = "J4/Job03";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J4-Job03</title>
</head>
<body>
    
<!-- Développez un algorithme qui affiche le nombre d’arguments $_POST.
 Tips :
 Pour tester votre code, créez un formulaire html <form> de type POST avec différents
 champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
 Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
 “Le nombre d’argument POST envoyé est : “-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <h2>Vos coordonnées</h2>
       <label for="nom">Nom : </label>
       <input type="text" name="nom" id="nom" /><br><br>
       <label for="prenom">Prénom : </label>
       <input type="text" name="prenom" id="prenom" /><br><br>
       <label for="email">Email : </label>
       <input type="email" name="email" id="email" /><br><br>
  <input type="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = 0;
        if (!empty($_POST['nom'])) {
            $a++;
        }
        if (!empty($_POST['prenom'])) {
            $a++;
        }
        if (!empty($_POST['email'])) {
            $a++;
        }
        echo "<p>Le nombre d'arguments POST envoyés est : $a</p>";
    }
    
?>
</body>
</html>