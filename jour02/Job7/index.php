<?php
$title = "Job7";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<pre>
<?php
$hauteur = 5;
$output = "";
for ($i = 1; $i < $hauteur; $i++) {
    $output .= str_repeat(" ", $hauteur - $i);
    $output .= "/";
    $innerSpaces = ($i - 1) * 2;
    $output .= str_repeat(" ", $innerSpaces);
    $output .= "\\";
    $output .= "\n";
}
$output .= "/";
$output .= str_repeat("_", ($hauteur - 1) * 2);
$output .= "\\";
echo $output;
?>
</pre>
</body>
</html>

