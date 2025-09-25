<?php
$title = "Job05";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 300px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        thead {
            background-color: lightgrey;
        }
    </style>
</head>
<body>
<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$length = 0;
while (isset($str[$length])) {
    $length++;
}
$index = 0;
while ($index < $length) {
    $car = $str[$index];
    if (
        ($car >= 'A' && $car <= 'Z') ||
        ($car >= 'a' && $car <= 'z')
    ) {
        $is_voyelle = false;
        $v_index = 0;
        while (isset($voyelles[$v_index])) {
            if ($car == $voyelles[$v_index]) {
                $is_voyelle = true;
                break;
            }
            $v_index++;
        }
        if ($is_voyelle) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
    $index++;
}
?>
<p><em><?php echo $str; ?></em></p>
<table>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["voyelles"]; ?></td>
            <td><?php echo $dic["consonnes"]; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>