<?php
$title = "Job03";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>
<body>

<?php
    /**TABLEAU: 3colonnes:type-nom-valeur */
    $nom="Nom";
    $type="Type";
    $valeur="Valeur";
?>

<?php
    /**NOM */
    $nombool="Boolean ou bool";
    $nomint="Integer ou int";
    $nomfloat="Floating ou float";
    $nomstring="String";
    $nomarray2="Array";
    /**TYPE */
    $typbool="Primitif";
    $typint="Primitif";
    $typfloat="Primitif";
    $typstring="Non primitif";
    $typarray="Non primitif";
    /**VALEUR */
    $valbool="Vrai ou faux";
    $valint="Nombre entier";
    $valfloat="Nombre décimal";
    $valstring="Chaîne de caractères";
    $valarray="Tableau";
    ?>
<?php
echo "<table>
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <tr>
        <th>$nom</th>
        <th>$type</th>
        <th>$valeur</th>
    </tr>
    <tr>
        <td>$nombool</td>
        <td>$typbool</td>
        <td>$valbool</td>
    </tr>
    <tr>    
        <td>$nomint</td>
        <td>$typint</td>
        <td>$valint</td>
    </tr>
    <tr>
        <td>$nomfloat</td>
        <td>$typfloat</td>
        <td>$valfloat</td>
    </tr>
    <tr>
        <td>$nomstring</td>
        <td>$typstring</td>
        <td>$valstring</td>
    </tr>
    <tr>
        <td>$nomarray2</td>
        <td>$typarray</td>
        <td>$valarray</td>
    </tr>
</table>"
?>
</body>
</html>