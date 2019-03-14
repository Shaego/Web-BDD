
<section id="section1">


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
            else
                echo "<a class='menu'  href='$lien->URL' >$lien->Francais</a>.<br>";
        }
        ?>
    </ol>
</section>
<section id="section2">
    <h1 id="slogan">To Infinity and Beyond</h1>
</section>