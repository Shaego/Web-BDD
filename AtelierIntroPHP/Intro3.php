<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Hello World!</title>
</head>
<body>
<?php
if ($_GET["hello"] < 1){
    echo "Je te dis bonnjour que tu le veuilles ou non !";
    echo "Voici tes données personnelles secretes que personne ne devrait connaître";
    echo "Tu es connu sous le nom de ". $_GET["txtuser"];
    echo "Ton mot de passe est ". $_GET["txtmdp"]. " sérieusement ??!";
}
elseif ($_GET["hello"] === 1 ){
    echo "Bonjour bonjour !";

}
else
    echo "Tu veux plusieurs bonjour ? Reviens demain !"

?>
</body>
</html>