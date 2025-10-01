<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour07-Job06</title>
</head>
<body>
    <?php
function leetSpeak($str) {
    $result = '';
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if ($char === 'A' || $char === 'a') {
            $result .= '4';
        } elseif ($char === 'B' || $char === 'b') {
            $result .= '8';
        } elseif ($char === 'E' || $char === 'e') {
            $result .= '3';
        } elseif ($char === 'G' || $char === 'g') {
            $result .= '6';
        } elseif ($char === 'L' || $char === 'l') {
            $result .= '1';
        } elseif ($char === 'S' || $char === 's') {
            $result .= '5';
        } elseif ($char === 'T' || $char === 't') {
            $result .= '7';
        } else {
            $result .= $char;
        }
    }
    return $result;
}
echo leetSpeak("Hello LaPlateforme!");
?>
</body>
</html>