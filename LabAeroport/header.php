
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
    ?>
