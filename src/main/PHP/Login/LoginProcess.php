<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 29.08.2018
 * Time: 11:01
 */

    session_start();
    require_once "../../../resources/dbconn.php";//require wymaga pliku, jeśli nie uda sięotworzyć pliku będzie błąd krytyczny
    //include powoduje wyjątek i skrypt działa dalej

    if(!isset($_POST['login'])||!isset($_POST['password'])){
        header('location:../../../../LoginForm.php');
        exit();
    }

    //przypisanie do zmiennych pól tablicy superglobalnej _POST
    $login=$_POST['login'];
    $password=$_POST['password'];

    //zabezpieczenie zmiennych przed wstrzykiwaniem js
    $login=htmlentities($login, ENT_QUOTES, "UTF-8");



    $stmt=$db->prepare('SELECT * FROM users WHERE login=:login' );
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
   // $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->execute();



    if($stmt) {
        $how_many_users = $stmt->rowCount();
        if ($how_many_users >0) {
            $row = $stmt->fetch();
            if (password_verify($password, $row['password'])) {
                    $_SESSION['logged_in'] = true;
                    $_SESSION['user'] = $row['login'];
                    unset($_SESSION['error']);
                    header('location:../game.php');


            }else{
                $_SESSION['error'] = "Nieprawidłowy login lub hasło";
                header("location:../../../../LoginForm.php");
            }
        }else {
            $_SESSION['error'] = "Nieprawidłowy login lub hasło";
            header("location:../../../../LoginForm.php");
        }
    }
    $db=null;

?>


