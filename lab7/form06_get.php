<?php
session_start();
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
foreach ($result as $v) {
echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
}
$result->free();
$link->close();

print_r('
<a href="http://localhost/lab6/form06_post.php">Add record</a>
<a href="http://localhost/lab6/form06_get.php">Show all records</a>
');

if (isset($_SESSION["message"]))
{
    print_r("<br>".$_SESSION["message"]);
    unset($_SESSION["message"]);
}
?>