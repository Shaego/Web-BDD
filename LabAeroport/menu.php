
<section id="section1">

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        try{
            $conn = new PDO("mysql:host=$servername; dbname=BdAeroport",$username, $password);
            $conn ->setAttribute( PDO:: ATTR_ERRMODE,  PDO:: ERRMODE_EXCEPTION);
            echo "connexion réussie";
        }
        catch (PDOException $e)
        {
            die('Connexion échouée. Erreur :' .$e-> getMessage());
        }

        $accueil = $conn->query('SELECT nomUsager FROM tblUsager');

        while ($donnees = $accueil->fetch())
        {
            echo $donnees['nomUsager'] .'<br />';
        }
        $accueil->closeCursor();
        $conn = null;
        ?>
    <ol>
        <?php
        $xml = simplexml_load_file("./XML/menu.xml") or die();
        foreach ($xml->children() as $lien) {

            if ($cookie_value == "francais" ){
                echo "<a class='menu'  href='$lien->URL' >$lien->Francais</a>.<br>";
            }
            elseif ($cookie_value == "english" ){
               echo "<a class='menu'  href='$lien->URL' >$lien->Anglais</a>.<br>";

            }
        }
        ?>
    </ol>
</section>
<section id="section2">
    <h1 id="slogan">To Infinity and Beyond</h1>
</section>