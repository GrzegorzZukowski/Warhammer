<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 06.09.2018
 * Time: 20:41
 */
session_start();
if(!isset($_SESSION['registry_success'])){
    header('location:../../../../RegistrationForm.php');
    exit();
}else{
    unset($_SESSION['registry_success']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warhammer Gamr</title>
</head>
<body>
Witaj, zarejestrowałeś siępomyślnie. Możesz teraz zalogować się na własne konto<br>
<a href="../../../../LoginForm.php">Zaloguj się i zacznij grę!</a>
</body>
</html>
