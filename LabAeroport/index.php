<?php

session_start();

$_SESSION["userConnect"] = "on";

echo "la session est activée";


$cookie_name = "user";
$cookie_value = "Definitely Not Stalking You";
$cookie_language = $_POST["userlangue"];
$cookie_expire = time() + 86400*7;
setcookie($cookie_name,  $cookie_language, $cookie_expire);
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title> Buzz Lightyear Airways</title>
    <link rel="stylesheet"  href="style.css"/>
</head>
<style>

</style>
<header id="header">
    <?php include 'header.php'; ?>
</header>
<body>
    <?php include 'menu.php'; ?>
</body>
<footer>
    <?php include 'footer.php'; ?>
</footer>
</html>