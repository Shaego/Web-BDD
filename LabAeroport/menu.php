
<section>
    <ol>
        <?php
        $xml = simplexml_load_file("./XML/menu.xml") or die();

        foreach ($xml->children() as $lien) {

            if ($_COOKIE["user"] == "english" ){
                echo "<a class='menu'  href='$lien->URL' >$lien->Anglais</a>.<br>";
            }
            elseif ($_COOKIE["user"] == "francais" ){
                echo "<a class='menu'  href='$lien->URL' >$lien->Francais</a>.<br>";
            }

        }
        ?>
    </ol>
</section>
<section>
    <h1 id="slogan">To Infinity and Beyond</h1>
</section>