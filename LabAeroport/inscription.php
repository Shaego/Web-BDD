<?php
session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<header id="header">
    <img id="logo" src="Image/logoplane.png" height="50" width="60" />
    <h1 id="companie">BUZZ LIGHTYEAR AIRWAYS</h1>
</header>
<body>
<form method="post" action="index.php">
    <div id="username"> <label for="txtuser">Nom d'usager : </label><input id="txtuser" name="txtuser" type="text" required /></div>
    <div id="usermdp"> <label for="txtmdp">Mot de passe : </label><input id="txtmdp" name="txtmdp" type="password" maxlength="8" required /></div>
    <div id="userjustname"> <label for="userjustname">PRENOM : </label><input id="userjustname" name="txtjustname" type="text" required /></div>
    <div id="userlastname"> <label for="txtuserlastname">Nom de Famille : </label><input id="txtuserlastname" name="txtuserlastname" type="text" required /></div>
    <div id="userlangue"> <label for=rdlangue">Langue : </label><br>
        <input type="radio" name="userlangue" value="english">English<br>
        <input type="radio" name="userlangue" value="francais">Francais<br></div>
    <button type="submit" id="connect" name="inscription" value="1">S'inscrire</button>
</form>
</body>
<footer>
    <p>Fait par Baptiste Bouillet</p>
    <p>Contactez-nous : bouba1830343@etu.cegepjonquiere.ca</p>
</footer>
</html>