<?php
session_start();
$_SESSION["valeur"] = $codeEditeur;
$servername = "localhost";
$username = "root";
$password = "mysql";
$codeEditeur = $_POST["code"];
$nomEditeur = $_POST["nom"];
$villeEditeur = $_POST["ville"];
$pays = $_POST["pays"];
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
        <title>Editeurs</title>
    </head>
    <body>
        <form action="Livres_par_editeur.php" method="post">
            <label>Choisir un éditeur</label>
            <select name="nom">
                <?php
                $reponse = $conn->query('SELECT noEditeur, nomEditeur FROM tblEditeur');
                while ($row = $reponse->fetch())
                {
                    echo "<option value='". $row['noEditeur']."'>" . $row['nomEditeur'] . "</option>";
                }

                ?>
            </select>
            <input type="submit" value="Rechercher">
        </form>

        <div>
            <h1>Ajouter un Éditeur</h1>
            <form action="Choix_Editeur.php" method="post">
                <label>Code d'éditeur:<input type="text" maxlength="4" minlength="4" name="code" required></label>
                <label>Nom de l'éditeur:<input type="text" name="nom"></label>
                <label>Ville de l'éditeur:<input type="text" name="ville"></label>
                <label>Pays de l'éditeur:<input type="text" name="pays"></label>
                <input type="submit">
            </form>
        </div>
    </body>
</html>
