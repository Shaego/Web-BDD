<?php

session_start();

$_SESSION["userConnect"] = "on";

echo "votre session est activée";


$cookie_name = "user";
$cookie_value = $_POST["userlangue"];
$cookie_expire = time() + 86400*7;
setcookie($cookie_name,  $cookie_value, $cookie_expire);
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title> Buzz Lightyear Airways</title>
    <link rel="stylesheet"  href="style.css"/>
</head>
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