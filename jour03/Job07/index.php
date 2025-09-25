<?php
$title = "Job07";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job07</title>
</head>
<body>
    <?php
    $str= "Certaines choses changent, et d'autres ne changeront jamais.";
$choses= "";
$longueur= 0;
while (isset($str[$longueur])) {
    $longueur++;
}
$caractere1 = $str[0];
for ($a= 0; $a < $longueur - 1; $a++) {
    $choses .= $str[$a + 1];
}
$choses .= $caractere1;
echo $choses;
    ?>
</body>
</html>