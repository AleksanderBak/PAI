<?php
session_start();
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
print<<<KONIEC
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<form action="form06_redirect.php" method="POST">
id_prac <input type="text" name="id_prac">
nazwisko <input type="text" name="nazwisko">
<input type="submit" value="Wstaw">
<input type="reset" value="Wyczysc">
</form>
KONIEC;
print_r('
<a href="http://localhost/lab6/form06_post.php">Add record</a>
<a href="http://localhost/lab6/form06_get.php">Show all records</a>
');
?>