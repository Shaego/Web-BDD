<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Formulaire</title>
    <link rel="stylesheet"  href="Style.css"/>
</head>
<?php
include "index.php";
?>
<form  method="post" action="watch.php">
    <div id="code"><label for="code">Code Aeroport : </label><input id="txtcode" name="txtcode" type="text" required /></div>
    <div id="nom"> <label for="txtnom">Nom Aeroport : </label><input id="txtnom" name="txtnom" type="text" required /></div>
    <div id="ville"> <label for="txtville">Nom Ville : </label><input id="txtville" name="txtville" type="text" required /></div>
    <button type="submit" id="addAirport">Ajouter Aeroport</button>
</form>
</html>