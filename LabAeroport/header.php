<?php
session_start();
?>
    <img id="logo" src="Image/logoplane.png" height="50" width="60" />
    <h1 id="companie">BUZZ LIGHTYEAR AIRWAYS</h1>
    <?php
    echo '<a href="connexion.php" >Deconnexion</a>';
    echo '<a href="aeroport.php" >Aéroports</a>';
    echo '<a href="statistiques.php" >Statistiques</a>' .'<br>';


    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $nom = $_POST["txtuser"];
    $pwd = $_POST["txtmdp"];
    $prenom = $_POST["txtjustname"];
    $nomFam = $_POST["txtuserlastname"];
    $checkCo = $_POST["connexion"];
    $checkInsc = $_POST["inscription"];


    try{
        $conn = new PDO("mysql:host=$servername; dbname=BdAeroport",$username, $password);
        $conn ->setAttribute( PDO:: ATTR_ERRMODE,  PDO:: ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        die('Connexion échouée. Erreur :' .$e-> getMessage());
    }

    if ($checkInsc !== null)
     {
        $donnees = "INSERT INTO tblUsager (nomUsager, pwdUsager, prenomUsager, nomUtilisateur, dateCreation)
        VALUES ('$nom', '$pwd', '$prenom', '$nomFam', CURDATE())";
         $conn->exec($donnees);
     }
     if ($_POST["txtuser"] && $_POST["txtmdp"])
     {
         $_SESSION["nom"] = $_POST["txtuser"];
         $_SESSION["pwd"] = $_POST["txtmdp"];
     }
    $accueil = $conn->query('SELECT prenomUsager, nomUtilisateur FROM tblUsager WHERE nomUsager="'.$_POST["txtuser"].'" AND pwdUsager="'.$_POST["txtmdp"].'"');

    if ($accueil ->rowCount() > 0) {
        while ($donnees = $accueil->fetch()) {
            echo 'Bienvenue ' . ' ' .$donnees['prenomUsager'] .' ' .$donnees['nomUtilisateur'] . '<br/>';
        }

    }
    else {
        header("Location: inscription.php");
    }
    $accueil->closeCursor();
    $conn = null;

    ?>
