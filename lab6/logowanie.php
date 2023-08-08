<?php
    require("functions.php");
    session_start();
    
    if(isset($_POST['zaloguj'])) {
        if ($_POST['login'] == $osoba1->login && $_POST['password'] == $osoba1->haslo) {
            $_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
            $_SESSION['zalogowany'] = 1;
            header("Location: user.php");
        } elseif ($_POST['login'] == $osoba2->login && $_POST['password'] == $osoba2->haslo){
            $_SESSION['zalogowanyImie'] = $osoba2->imieNazwisko;
            $_SESSION['zalogowany'] = 1;
            header("Location: user.php");
        } else {
            header("Location: index.php");
        }
    } 
?>