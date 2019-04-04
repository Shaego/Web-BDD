<?php
session_start();
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
    <a href="index.php">Accueil</a>
</header>
<body>
<form method="post" action="connexion.php">
    <div id="codeAero"> <label for="codeAero">Code aéroport : </label><input id="codeAero" name="codeAero" type="text" maxlength="3" /></div>
    <div id="nomAero"> <label for="nomAero">Nom aéroport : </label><input id="nomAero" name="nomAero" type="text" required /></div>
    <div id="numTel"> <label for="numTel">numéro téléphone : </label><input id="numTel" name="numTel" type="text" required /></div>
    <div id="heureGMT"> <label for="heureGMT">Heure GMT : </label><input id="heureGMT" name="heureGMT" type="text" required /></div>
    <div id="ville"> <label for="ville">Ville : </label><input id="ville" name="ville" type="text" required /></div>
    <button type="submit" id="creer" name="creer" >Créer</button>
    <button type="submit" id="modifier" name="modifier" >Modifier</button>
    <button type="submit" id="supprimer" name="supprimer" >Supprimer</button>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $codeAero = $_POST["codeAero"];
    $nomAero = $_POST["nomAero"];
    $numTel = $_POST["numTel"];
    $heure = $_POST["heureGMT"];
    try{
        $conn = new PDO("mysql:host=$servername; dbname=BdAeroport",$username, $password);
        $conn ->setAttribute( PDO:: ATTR_ERRMODE,  PDO:: ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        die('Connexion échouée. Erreur :' .$e-> getMessage());
    }

    $donnees = "INSERT INTO tblAeroport (codeAeroport, nomAeroport, noTelAeroport, heureGMT)
        VALUES ('$codeAero', '$nomAero', '$numTel', '$heure')";
    $conn->exec($donnees);

    ?>
</form>
</body>
<footer>
    <p>Fait par Baptiste Bouillet</p>
    <p>Contactez-nous : bouba1830343@etu.cegepjonquiere.ca</p>
</footer>
</html>