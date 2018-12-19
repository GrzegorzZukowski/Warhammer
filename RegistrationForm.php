
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Warhammer Game</title>
    <link rel="stylesheet" type="text/css" href="src/main/css/errstyle.css">
    <script src='https://www.google.com/recaptcha/api.js'></script> <!--skrypt od recaptchy -->
</head>
<body>
<quote> There is no escape from chaos, it marks us all.</quote>
<form action="src/main/PHP/Registration/RegistrationProcess.php" method="post">
    Imię: <br><input type="text" name="name" placeholder="więcej niż 3 i mniej niż 20 znaków"><br>
    <?php
    if(isset($_SESSION['err_name'])){
        echo'<div class="error">'.$_SESSION['err_name'].'</div>';
        unset($_SESSION['err_name']);
    }
    ?>

    Email: <br><input type="email" name="email"><br>
    <?php
    if(isset($_SESSION['err_email'])){
        echo'<div class="error">'.$_SESSION['err_email'].'</div>';
        unset($_SESSION['err_email']);
    }
    ?>

    Login: <br><input type="text" name="login"><br>
    <?php
    if(isset($_SESSION['err_login'])){
        echo'<div class="error">'.$_SESSION['err_login'].'</div>';
        unset($_SESSION['err_login']);
    }
    ?>

    Hasło: <br><input type="password" name="password"><br>
    <?php
    if(isset($_SESSION['err_pass'])){
        echo'<div class="error">'.$_SESSION['err_pass'].'</div>';
        unset($_SESSION['err_pass']);
    }
    ?>

    Potwierdź hasło: <br><input type="password" name="confirm_password"><br>
    <?php
    if(isset($_SESSION['err_pass'])){
        echo'<div class="error">'.$_SESSION['err_pass'].'</div>';
        unset($_SESSION['err_pass']);
    }
    ?>

    <input type="checkbox" name="regulations">Akceptuję <a href="src/main/HTML/Regulations.html">regulamin</a><br> <!-- DODAJ LINK DO REGULAMINU-->
    <?php
    if(isset($_SESSION['err_regulations'])){
    echo'<div class="error">'.$_SESSION['err_regulations'].'</div>';
    unset($_SESSION['err_regulations']);
    }
    ?>

    <div class="g-recaptcha" data-sitekey="6Lfcp24UAAAAAADs_XxNofbcqUNNh8ztO_xfMe5M"></div>
    <?php
    if(isset($_SESSION['err_isbot'])){
        echo'<div class="error">'.$_SESSION['err_isbot'].'</div>';
        unset($_SESSION['err_isbot']);
    }
    ?>
    <input type="submit" value="Zarejestruj się">
</form>
</body>
</html>