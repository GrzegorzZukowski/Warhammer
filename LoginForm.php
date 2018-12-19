<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warhammer Game </title>
    <link rel="stylesheet" type="text/css" href="src/main/css/errstyle.css">
</head>
<body>
    <quote> There is no escape from chaos, it marks us all.</quote>
    <form action="src/main/PHP/Login/LoginProcess.php" method="post">
        Login: <br><input type="text" name="login" placeholder="A-Z, a-z, 0-9" ><br>
        Hasło: <br><input type="password" name="password" placeholder="A-Z, a-z, 0-9"><br>
        <?php
        if(isset($_SESSION['error']))
            echo '<div class="error">'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
        ?>

        <input type="submit" value="Zaloguj się">
    </form>
</body>
</html>