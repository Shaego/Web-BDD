<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Aeroport</title>
    <link rel="stylesheet" href="style.css">
</head>
<header id="header">
    <?php include 'header.php'; ?>
    <a href="index.php">Accueil</a>
</header>
<body>
<form method="post" action="aeroport.php">
    <div id="codeAero"> <label for="codeAero">Code Aéroport : </label><input id="codeAero" name="codeAero" type="text" maxlength="3" /></div>
    <div id="nomAero"> <label for="nomAero">Nom Aéroport : </label><input id="nomAero" name="nomAero" type="text" required /></div>
    <div id="numTel"> <label for="numTel">Numéro Téléphone : </label><input id="numTel" name="numTel" type="text" required /></div>
    <div id="heureGMT"> <label for="heureGMT">Heure GMT : </label><input id="heureGMT" name="heureGMT" type="text" required /></div>
    <div id="ville"> <label for="ville">Ville : </label><input id="ville" name="ville" type="text" required /></div>
    <div> <label>Code ville</label><select name="codeVille">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        try{
            $conn = new PDO("mysql:host=$servername; dbname=BdAeroport",$username, $password);
            $conn ->setAttribute( PDO:: ATTR_ERRMODE,  PDO:: ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            die('Connexion échouée. Erreur :' .$e-> getMessage());
        }

        $affichage = $conn->query('SELECT codeVille FROM tblAeroport');
        while ($row = $affichage->fetch())
        {
            echo "<option value='". $row['codeVille']."'>" . $row['codeVille'] . "</option>";
        }

        ?>
    </select></div>
    <button type="submit" id="creer" name="aeroport" value="1">Créer</button>
    <button type="submit" id="modifier" name="aeroport" value="2">Modifier</button>
    <button type="submit" id="supprimer" name="aeroport" value="3">Supprimer</button>
    <?php
    $codeAero = $_POST["codeAero"];
    $nomAero = $_POST["nomAero"];
    $numTel = $_POST["numTel"];
    $heure = $_POST["heureGMT"];
    $codeVille = $_POST["codeVille"];

        if ($_POST["aeroport"] == 1) {
                $ajout = "INSERT INTO tblAeroport (codeAeroport, nomAeroport, noTelAeroport, heureGMT, codeVille)
                VALUES ('$codeAero', '$nomAero', '$numTel', '$heure', '$codeVille')";
                $conn->exec($ajout);
                if (ISSET ($_POST["codeAero"])) {
                    echo "L'aéroport a bien été ajouté.";
                } else {
                    echo "L'ajout a échoué";
                }

        }
        elseif ($_POST["aeroport"] == 2){
            $change = "UPDATE tblAeroport SET noTelAeroport='$numTel' WHERE codeAeroport ='$codeAero'AND nomAeroport ='$nomAero'";
            $conn->exec($change);
            echo "La modification a été effectuée";
        }

        elseif (($_POST["aeroport"] == 3)){
            $delete = "DELETE FROM tblAeroport WHERE codeAeroport ='$codeAero' AND nomAeroport ='$nomAero'";
            $conn->exec($delete);
            echo "La suppression a été effectuée";
        }



    ?>
</form>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>