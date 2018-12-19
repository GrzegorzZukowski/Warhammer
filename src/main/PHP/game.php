<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warhammer Gamr</title>
</head>
<body>
<?php

session_start();
if(!isset($_SESSION['logged_in'])){
    header('location:../../../LoginForm.php');
    exit();
}

echo "Witaj ".$_SESSION['user'].'! [ <a href="Login/LogoutProcess.php">Wyloguj się</a> ]';
?>


<br>
<a href="CharacterCreator/createHeroForm.php" >Stwórz postać </a>




</body>
</html>