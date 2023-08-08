<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
    <?php
    require_once("functions.php");
    if ($_GET['sendTime']) {
        setcookie("test", "test", time() + (86400 * 30), "/");
        print_r("Cookie set");
    }
    ?>
    <br><a href="index.php">Index php</a> 
</body>
</html>

