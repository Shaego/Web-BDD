<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Buzz Lightyear Airways</title>
    
</head>
<style>
    header {

    }
    #companie {
        font-family: Garamond;
        color: goldenrod;
    }
    #slogan{
        font-family: Garamond;
        color: goldenrod;
    }
    body {
        margin-top:2%;
        background-image: url("Image/sideplane.png");
        background-repeat: no-repeat;
        background-size: 45%;
        text-align: center;
    }
    li {
        width: 15%;
        text-align: left;
        font-size: x-large;
        list-style-position: inside;
        border-style: dotted;
        border-color: indigo;
    }
    footer{
        clear: both;
        position: relative;
        height: 40px;
        margin-top: 25%;
    }
    hr{
        color:indigo;
        border-style: wave;
        border-radius: 30%;
        border-width: 10px;
    }
</style>

<header>

    <img id="choco" src="Image/logoplane.png" height="50" width="60" />
    <h1 id="companie">BUZZ LIGHTYEAR AIRWAYS</h1>

<?php
    $user = $_GET["txtuser"];
    echo "<a href=''>Bonjour $user</a>";
    echo '<a href=" "><img id="" title="Déconnexion" src=""  height="" width=""/>';

?>
    <hr>
</header>
<body >
<section>
    <ol title="Menu">
        <li><a href="">Regarder les vols</a></li>
        <li><a href="">Réserver un vol</a></li>
        <li><a href="">Regarder accidents</a></li>
    </ol>
</section>
<section>
<h1 id="slogan">To Infinity and Beyond</h1>
</section>
<footer>
    <hr>
    <p>Fait par Baptiste Bouillet</p>
    <p>Contactez-nous : bouba1830343@etu.cegepjonquiere.ca</p>
</footer>
</body>
</html>