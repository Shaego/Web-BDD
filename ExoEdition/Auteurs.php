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
    <title>Auteurs</title>
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
        <tr><td>Prenom</td><td>Nom</td><td>Titre du livre</td></tr>
    </table>
    <?php
    //Join
    $auteur = $conn->query('SELECT prenAuteur, nomAuteur FROM tblAuteur');
    $livre = $conn->query('SELECT titreLivre FROM tblLivre');

    while ($row = $auteur->fetch())
    {
        echo "<tr><td>" .$row['prenAuteur'] ."</td>"."<td>" .$row['nomAuteur']. "</td></tr>";
    }

    $auteur->closeCursor();
    while ($row = $livre->fetch())
    {
        echo "<td><td>".$row['titreLivre']. "</td></tr>";
    }
    $livre->closeCursor();
    ?>
</div>
</body>
</html>
