<?php 
require("functions.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>
<body>
    <?php 
        echo("<h1>Nasz system</h1>");
        if (isset($_POST['wyloguj'])) {
            $_SESSION['zalogowany'] = 0;
        }
    ?>
    <div style="border: 1px solid black; padding: 10px; margin: 10px;">
    <h3>Logowanie:</h3>
    <form action="logowanie.php" method="post">
        <p>Login: <input type="text" name="login"></p>
        <p>Hasło: <input type="password" name="password"></p>
        <input type="submit" name="zaloguj" value="Zaloguj">
    </form>
    </div>
    <div style="border: 1px solid black; padding: 10px; margin: 10px;">
    <form action="cookie.php" method="get">
        <h3>Cookie: </h3>
        Czas: <input type="number" name="czas">
        <input type="submit" name="sendTime" value="Utwórz cookie">
    </form>
    <?php 
        if (isset($_COOKIE['test'])) {
            echo "Cookie value: ".$_COOKIE['test'];
        } else {
            echo "Cookie value: ";
        }
    ?>
    </div>

    <br><a href="index.php">Index php</a> 
    <br><a href="user.php">User php</a>
</body>
</html>