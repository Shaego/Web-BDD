
    <img id="logo" src="Image/logoplane.png" height="50" width="60" />
    <h1 id="companie">BUZZ LIGHTYEAR AIRWAYS</h1>
    <?php

    $xml = simplexml_load_file("./XML/user.xml") or die();

    foreach ($xml->children() as $user) {

        if ($_POST["txtuser"]== $user->mail && $_POST["txtmdp"]== $user->password){
            echo "Bonjour ";
            echo $_POST["txtuser"];
        }
    }

    echo '<a href="connexion.php" >Deconnexion</a>';

    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $nom = $_POST["txtuser"];
    $pwd = $_POST["txtmdp"];
    $connexion = false;

    try{
        $conn = new PDO("mysql:host=$servername; dbname=BdAeroport",$username, $password);
        $conn ->setAttribute( PDO:: ATTR_ERRMODE,  PDO:: ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        die('Connexion échouée. Erreur :' .$e-> getMessage());
    }

    $accueil = $conn->query('SELECT nomUtilisateur, prenomUsager FROM tblUsager WHERE nomUsager="'.$nom.'" AND pwdUsager="'.$pwd.'"');

    while ($donnees = $accueil->fetch())
    {

        echo $donnees['nomUtilisateur'] .' ' .$donnees['prenomUsager'] .'<br/>';
    }

    if($accueil->rowCount() > 0)
    {
        $connexion = true;
    }
    elseif ( $accueil->rowCount() == 0)
    {
        header("Location: inscription.php");
    }
    $accueil->closeCursor();
    $conn = null;

    ?>
