
    <img id="logo" src="Image/logoplane.png" height="50" width="60" />
    <h1 id="companie">BUZZ LIGHTYEAR AIRWAYS</h1>
    <?php



    echo '<a href="connexion.php" >Deconnexion</a>';

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
    $accueil = $conn->query('SELECT nomUtilisateur, prenomUsager FROM tblUsager WHERE nomUsager="'.$nom.'" AND pwdUsager="'.$pwd.'"');

    if ($accueil ->rowCount() > 0) {
        while ($donnees = $accueil->fetch()) {
            echo $donnees['nomUtilisateur'] . $donnees['prenomUsager'] . '<br/>';
        }
    }
    else{
        header("Location: inscription.php");
    }
    $accueil->closeCursor();
    $conn = null;

    ?>
