<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 13.09.2018
 * Time: 17:48
 */
session_start();


    if (isset($_POST['heroName'])) {
        $is_hero_ok = true;
        //hero name validation
        if ((strlen($_POST['heroName']) < 1) || (strlen($_POST['heroName']) > 20)) {
            $is_hero_ok = false;
            $_SESSION['err_name'] = "imie musi posiadać 3 do 20 znaków";
            header('location:../createHeroForm.php');
        }

        if (ctype_alnum($_POST['heroName']) == false) {
            $is_hero_ok = false;
            $_SESSION['err_name'] = "imie musi składać się tylko z liter i cyfr, bez polskich znaków";
            header('location:../createHeroForm.php');
        }
        //hero surname validation
        if ((strlen($_POST['heroSurname']) < 3) || (strlen($_POST['heroSurname']) > 20)) {
            $is_hero_ok = false;
            $_SESSION['err_sname'] = "przydomek musi posiadać 3 do 20 znaków";
            header('location:../createHeroForm.php');
        }

        if (ctype_alnum($_POST['heroSurname']) == false) {
            $is_hero_ok = false;
            $_SESSION['err_sname'] = "przydomek musi składać się tylko z liter i cyfr, bez polskich znaków";
            header('location:../createHeroForm.php');
        }
        //hero sex validation
        if (!isset($_POST['sex'])) {
            $is_hero_ok = false;
            $_SESSION['err_sex'] = "wybierz płeć";
            header('location:../createHeroForm.php');
        }
        //hero race vlaidation
        if (!isset($_POST['race'])) {
            $is_hero_ok = false;
            $_SESSION['err_race'] = "wybierz rasę";
            header('location:../createHeroForm.php');
        }
        //hero class validaion
        if (!isset($_POST['class'])) {
            $is_hero_ok = false;
            $_SESSION['err_class'] = "wybierz klasę postaci";
            header('location:../createHeroForm.php');
        }
        if ($is_hero_ok==true){
            $_SESSION['heroName']=$_POST['heroName'];
            $_SESSION['heroSurname']=$_POST['heroSurname'];
            $_SESSION['sex']=$_POST['sex'];
            $_SESSION['race']=$_POST['race'];
            $_SESSION['class']=$_POST['class'];
            $_SESSION['creation_success']=true;
            header('location:Main.php');
        }


}
