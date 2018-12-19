<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 04.09.2018
 * Time: 15:52
 */
session_start();

session_unset();

header('location:../../../../LoginForm.php');