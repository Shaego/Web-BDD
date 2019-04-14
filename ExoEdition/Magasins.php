<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "mysql";
try{
    $conn = new PDO("mysql:host=$servername; dbname=BdEdition",$username, $password);
    $conn ->setAttribute( PDO:: ATTR_ERRMODE,  PDO:: ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    die('Connexion échouée. Erreur :' .$e-> getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Magasins</title>
</head>
<body>
<div>
    <h3>Menu</h3>
    <a href="Employes.php">Employés</a>
    <a href="Auteurs.php">Auteurs</a>
    <a href="Magasins.php">Magasins</a>
    <a href="Livres_par_editeur.php">Livres</a>
    <a href="Choix_Editeur.php">Changer d'éditeur</a>
</div>
<div>
    <table>
        <tr><td>Magasin</td><td>Adresse</td><td>Livre</td></tr>
    </table>
    <?php
    //Join
    $magasin = $conn->query('SELECT nomMag, rueMag FROM tblMagasin');
    $livre = $conn->query('SELECT titreLivre FROM tblLivre');

    while ($row = $magasin->fetch())
    {
        echo $row['nomMag'] ."<br>" .$row['rueMag']. "<br>";
    }

    $magasin->closeCursor();
    while ($row = $livre->fetch())
    {
        echo $row['titreLivre']. "<br>";
    }
    $livre->closeCursor();
    ?>
</div>
</body>
</html>
