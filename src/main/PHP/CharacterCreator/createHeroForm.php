<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 06.09.2018
 * Time: 22:23
 */
session_start();

echo "formularz tworzenia postaci<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warhammer Game </title>
    <link rel="stylesheet" type="text/css" href="../../css/errstyle.css">
</head>
<body>
<quote> There is no escape from chaos, it marks us all.</quote>
<form action="Character/Validator.php" method="post">

    Imie: <br><input type="text" name="heroName" placeholder="A-Z, a-z, 0-9" ><br>
    <?php
    if(isset($_SESSION['err_name'])){
    echo'<div class="error">'.$_SESSION['err_name'].'</div>';
    unset($_SESSION['err_name']);
    }
    ?>
    Nazwisko/Przydomek: <br><input type="text" name="heroSurname" placeholder="A-Z, a-z, 0-9"><br>
    <?php
    if(isset($_SESSION['err_sname'])){
    echo'<div class="error">'.$_SESSION['err_sname'].'</div>';
    unset($_SESSION['err_sname']);
    }
    ?>

    Płeć: <br>
        <label>mężczyzna<input type="radio" name="sex" value="male"><br></label>
        <label>kobieta<input type="radio" name="sex" value="female"><br></label>
    <?php
    if(isset($_SESSION['err_sex'])){
        echo'<div class="error">'.$_SESSION['err_sex'].'</div>';
        unset($_SESSION['err_sex']);
    }
    ?>

    Rasa:<br>
        <label>elf<input type="radio" name="race" value="elf"><br></label>
        <label>człowiek<input type="radio" name="race" value="human"><br></label>
        <label>krasnolud<input type="radio" name="race" value="dwarf"><br></label>
        <label>halfling<input type="radio" name="race" value="halfling"><br></label>
    <?php
    if(isset($_SESSION['err_race'])){
        echo'<div class="error">'.$_SESSION['err_race'].'</div>';
        unset($_SESSION['err_race']);
    }
    ?>
    Klasa postaci:<br>
        <label>wojownik- żołnierz Reiklandu<input type="radio" name="class" value="warrior"><br></label>
        <label>łotr- złodziej<input type="radio" name="class" value="rogue"><br></label>
        <label>kleryk- akolita Sigmara<input type="radio" name="class" value="cleric"><br></label>
        <label>mag- uczeń czarodzieja (kolegium ognia) <input type="radio" name="class" value="mage"><br></label>
    <?php
    if(isset($_SESSION['err_class'])){
        echo'<div class="error">'.$_SESSION['err_class'].'</div>';
        unset($_SESSION['err_class']);
    }
    ?>
    <input type="submit" value="Stwórz postać">
</form>
</body>
</html>
