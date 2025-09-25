<?php
$title = "Job03";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>DJob03</title>
</head>
<body>
    <?php
    $str= "I'm sorry Dave I'm afraid I can't do that";
$voyelle= ["a", "e", "i", "o", "y", "I"];
for ($a= 0; $a< strlen($str); $a++) {
    $caractere= $str[$a];
    // Vérifier si le caractère est une voyelle
    if (in_array($caractere, $voyelle)) {
        echo $caractere;
    }
}
    ?>
</body>
</html>