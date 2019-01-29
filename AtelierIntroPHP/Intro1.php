<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Hello World!</title>
</head>
<body>
<?php

if (isset($_GET["prenom"]))
{
    echo "Bonjour " .$_GET["prenom"]. " ".$_GET["nom"];
}
else
    echo "Bonjour Mr/Mme sans prenom";

?>
</body>
</html>