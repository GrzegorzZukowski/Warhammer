<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 04.09.2018
 * Time: 11:01
 */
session_start();


$name=$_POST['name'];
$login=$_POST['login'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

$name=htmlentities($name, ENT_QUOTES, "UTF-8");
$login=htmlentities($login, ENT_QUOTES, "UTF-8");
$password=htmlentities($password, ENT_QUOTES, "UTF-8");
$email=htmlentities($email, ENT_QUOTES, "UTF-8");
$confirm_password=htmlentities($confirm_password, ENT_QUOTES, "UTF-8");


if(isset($_POST['email'])) {
    $is_ok = true;
    //name validation
    if ((strlen($name) < 3) || (strlen($name) > 20)) {
        $is_ok = false;
        $_SESSION['err_name'] = "imie musi posiadać 3 do 20 znaków";
        header('location:../../../../RegistrationForm.php');
    }
    if (ctype_alnum($name) == false) {
        $is_ok = false;
        $_SESSION['err_name'] = "imie musi składać się tylko z liter i cyfr, bez polskich znaków";
        header('location:../../../../RegistrationForm.php');
    }

    //email validation
    $email_ok = filter_var($email, FILTER_SANITIZE_EMAIL);

    if ((filter_var($email_ok, FILTER_VALIDATE_EMAIL) == false) || $email_ok != $email) {
        $is_ok = false;
        $_SESSION['err_email'] = "niepoprawny adres email";
        header('location:../../../../RegistrationForm.php');
    }

    //login vlaidation
    if ((strlen($login) < 3) || (strlen($login) > 20)) {
        $is_ok = false;
        $_SESSION['err_login'] = "login musi posiadać 3 do 20 znaków";
        header('location:../../../../RegistrationForm.php');
    }
    if (ctype_alnum($login) == false) {
        $is_ok = false;
        $_SESSION['err_login'] = "login musi składać się tylko z liter i cyfr, bez polskich znaków";
        header('location:../../../../RegistrationForm.php');
    }

    //password validation
    if ((strlen($password) < 8) || (strlen($password) > 20)) {
        $is_ok = false;
        $_SESSION['err_pass'] = "hasło musi zawierac od 8 do 20 znaków ";
        header('location:../../../../RegistrationForm.php');

    }

    if ($password != $confirm_password) {
        $is_ok = false;
        $_SESSION['err_pass'] = "hasła są różne";
        header('location:../../../../RegistrationForm.php');
    }
    //hashhowanie hasła
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    //was regulations accepted
    if (!isset($_POST['regulations'])) {
        $is_ok = false;
        $_SESSION['err_regulations'] = "Zaakceptuj regulamin korzystania z serwisu";
        header('location:../../../../RegistrationForm.php');
    }

    //captcha check
    $secret = "6Lfcp24UAAAAAIf5igr3Psy3m4KWgHCBaOnT87BN"; //given by google
    $check = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $response = json_decode($check);
    if ($response->success == false) {
        $is_ok = false;
        $_SESSION['err_isbot'] = "jesteś botem!";
        header('location:../../../../RegistrationForm.php');
    }

    require_once "../../../resources/dbconn.php";

    try {
        $stmt = $db->prepare('SELECT id FROM users WHERE email=:email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        if (!$stmt) throw new PDOException($db->errorCode());

        $how_many_emails = $stmt->rowCount();   //check how many emails is in database
        if ($how_many_emails > 0) {             //if more than 0
            $is_ok = false;
            $_SESSION['err_email'] = "taki email już jest zajęty";
            header('location:../../../../RegistrationForm.php');
        }

        $stmt = $db->prepare('SELECT id FROM users WHERE login=:login');
        $stmt->bindParam(':login', $login);
        $stmt->execute();

        if (!$stmt) throw new PDOException($db->errorCode());

        $how_many_logins = $stmt->rowCount();
        if ($how_many_logins > 0) {
            $is_ok = false;
            $_SESSION['err_login'] = "taki login jest już zajęty, wybierz inny";
            header('location:../../../../RegistrationForm.php');
        }

        //ALL TEST PASSED SUCCESULLY, INSERT TO DATABASE
        if ($is_ok == true) {
            $stmt = $db->prepare('INSERT INTO users(name, login, password, email) VALUES (?, ?, ?, ?)');
            $stmt->execute(array($name, $login, $pass_hash, $email));
            $_SESSION['registry_success']=true;
            header('location:RegistrationSuccess.php');
        }
        $stmt=NULL;


    } catch (PDOException $e) {
        echo $e;
    }
}






