<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 29.08.2018
 * Time: 11:15
 *  * !!!!!!!!!!!!!CONNECTION TO DATABASE
 */
try {
    $db = new PDO('mysql:host=localhost; dbname=warhammer; encoding=utf8', 'root', '',[PDO::ATTR_EMULATE_PREPARES=>false]);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//powoduje wyświetlanie tablicy asocjacyjnej w obiekciwe pdo
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected\n";
}
catch(PDOException $e){
    die ("Unable to connect: ".$e->getMessage());
}

?>