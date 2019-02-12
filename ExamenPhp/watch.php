<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Watch</title>
    <link rel="stylesheet"  href="Style.css"/>
</head>
<?php
include "index.php";

if (isset($_POST["txtcode"])){

    echo "<p>Voici l'aéroport ajouté</p>";
    echo "<table><td><th>. ".$_POST["txtnom"]." .</th></td></table>";
}
else

    echo "<p>Vous n'avez pas ajouté d'Aeroport</p>"


?>

</html>