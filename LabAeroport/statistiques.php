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
<?php include 'menu.php'; ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>