<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Editeurs</title>
    </head>
    <body>
        <form action="Livres_par_editeur.php" method="post">
            <label>Choisir un édtieur</label>
            <select name="editeur">
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
