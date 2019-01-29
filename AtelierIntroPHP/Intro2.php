<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Hello World!</title>
</head>
<body>
<?php

if (isset($_GET["sexe"]))
{
    if ($_GET["sexe"] == "homme")
    {
        echo "Bonjour M." .$_GET["prenom"]. " ".$_GET["nom"];
    }
    elseif ($_GET["sexe"]== "femme")
    {
        echo "Bonjour Mme." .$_GET["prenom"]. " ".$_GET["nom"];
    }
    else

        echo "Bonjour " .$_GET["prenom"]. " ".$_GET["nom"];

}
else
    echo "Bonjour " .$_GET["prenom"]. " ".$_GET["nom"] ." personnage sans sexe";

?>
</body>
</html>