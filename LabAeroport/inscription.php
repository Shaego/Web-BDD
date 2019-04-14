<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<header id="header">
    <?php include 'header.php'; ?>
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
    <button type="submit" id="connect" name="inscription" value="1">S'inscrire</button><a href="connexion.php">Connection</a>
</form>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>