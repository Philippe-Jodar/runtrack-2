<?php
$title = "Job06";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>
<body>
    <?php
$str= "Les choses que l'on possede finissent par nous posseder.";
$reverseStr= "";
for ($a= strlen($str) - 1; $a >= 0; $a--) {
    $reverseStr .= $str[$a];
}
echo $reverseStr;
    ?>
</body>
</html>