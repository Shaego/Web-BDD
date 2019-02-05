<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Buzz Lightyear Airways</title>
</head>
<body >
<section>
    <ol title="Menu">
        <?php
        $xml = simplexml_load_file("./XML/menu.xml") or die();

        foreach ($xml->children() as $lien) {

            echo "<a href='$lien->URL' >$lien->Francais</a>";
        }
        ?>
    </ol>
</section>
<section>
    <h1 id="slogan">To Infinity and Beyond</h1>
</section>
</body>
</html>