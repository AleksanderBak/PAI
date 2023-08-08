<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<div style="border: 1px solid black; padding: 10px; margin: 10px;">
    <?php
    require_once("functions.php");
    if ($_SESSION['zalogowany'] == 1) {
        echo "Zalogowano";
        echo "<p>Zalogowany użytkownik: ".$_SESSION['zalogowanyImie']."</p>";
    } else {
        header("Location: index.php");
    }
    ?>
    <form action="index.php" method="post">
            <input type="submit" name="wyloguj" value="Wyloguj">
    </form>
</div>
<div style="border: 1px solid black; padding: 10px; margin: 10px;">
    <h3>Zdjęcie: </h3>
    <form action='user.php' method='POST' enctype='multipart/form-data'>
        <input type="file" name="image" accept="image/*">
        <br>
        <button type="submit">Wgraj</button>
    </form>

    <?php
    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
    } else {
        $file_name = "x";
    }
    echo "<img src=".$file_name." alt='zdjecie'>";
    ?>
</div>



<br><a href="index.php">Index php</a> 
<br><a href="user.php">User php</a>
</body>
</html>
