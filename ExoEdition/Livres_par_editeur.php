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
    <title>Livres</title>
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
            <tr><td>ISBN</td><td>Titre</td><td>Type</td><td>Date de publication</td><td>Prix</td></tr>
        </table>
        <?php
        //Join
        $livre = $conn->query('SELECT noLivre, titreLivre, typeLivre, datePubLivre, prixLivre FROM tblLivre');

        while ($row = $livre->fetch())
        {
            echo $row['noLivre'] ."<br>" .$row['titreLivre']. "<br>" .$row['typeLivre']. "<br>" .$row['datePubLivre']. "<br>" .$row['prixLivre']. "<br>";
        }
        $livre->closeCursor();

        ?>
    </div>
</body>
</html>
