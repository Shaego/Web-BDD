<?php
session_start();
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

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title> Buzz Lightyear Airways</title>
    <link rel="stylesheet"  href="style.css"/>
    <a href="index.php" />
</head>
<header id="header">
    <?php include 'header.php'; ?>
</header>
<body>
    <?php
    $allTickets = $conn->query( 'SELECT noVol, noBillet COUNT (noBillet) AS "Nombre billets vendus" FROM tblBillet GROUP BY noVol');
    var_dump($allTickets['noBillet']);
    echo $allTickets['noBillet'] .'<br>';

    $usedTickets = $conn->query( 'SELECT noVol, noBillet COUNT (noBillet) AS "Nombre billets vendus" FROM tblBillet WHERE noBillet EXISTS GROUP BY noVol');
    var_dump($usedTickets['noBillet']);
    echo $usedTickets['noBillet'] .'<br>';

    $airportTickets = $conn->query( 'SELECT codeAeroport, noBillet COUNT (noBillet) AS "Nombre billets vendus" FROM tblBillet WHERE noBillet  GROUP BY codeAeroport');
    var_dump($airportTickets['noBillet']);
    echo $airportTickets['noBillet'] .'<br>';

    $moyenneVol = $conn->query( 'SELECT AVG(dureeTotalePrevu) AS "Duree Moyenne" FROM tblVol GROUP BY codeAeroport');
    var_dump($airportTickets['noBillet']);
    echo $airportTickets['noBillet'] .'<br>';

    $sommeTotale =$conn->query('SELECT SUM(')

    ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>