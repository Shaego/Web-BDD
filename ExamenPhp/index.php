<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Ajouter un aeroport</title>
    <link rel="stylesheet"  href="Style.css"/>
</head>
<style>

</style>
<header id="header">
<h1>Les Aéroports</h1>
</header>
<body>
<table>
<td> //Les tableaux n'ont pas voulu se mettre comme sur tes screes (meme avec des br) nvm ! Bonne correction :)
<?php
$xml = simplexml_load_file("XMLAeroports.xml") or die();

foreach ($xml->children() as $Aeroport) {

        echo "<th>$Aeroport->CodeAeroport. </th>";
        echo "<th>$Aeroport->NomAeroport. </th>";
        echo "<th>$Aeroport->VilleAeroport. </th>";
}
?>
</td>
</table>
</body>
</html>