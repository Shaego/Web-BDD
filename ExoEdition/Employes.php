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
    <title>Employés</title>
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
        <tr><td>Prenom</td><td>Nom</td><td>Emploi</td></tr>

    <?php
    //Join
    $employe = $conn->query('SELECT prenomEmploye, nomEmploye FROM tblEmploye');
    $emploi = $conn->query('SELECT descEmploi FROM tblEmploi');

    while ($row = $employe->fetch())
    {
        echo "<tr><td>" .$row['prenomEmploye'] ."</td>"."<td>" .$row['nomEmploye']. "</td></tr>";
    }

    $employe->closeCursor();
    while ($row = $emploi->fetch())
    {
        echo "<tr><td>".$row['descEmploi']. "</td></tr>";
    }
    $emploi->closeCursor();
    ?>
    </table>
</div>
</body>
</html>
