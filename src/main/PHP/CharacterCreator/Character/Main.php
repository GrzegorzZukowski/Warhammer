<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 13.09.2018
 * Time: 18:53
 */
session_start();
require_once('CaracterRace/Race.php'); //!!!!!!WERY IMPORTANT- INCLUDE CLASSES IN CORRECT ORDER!!!!!
require_once('CaracterRace/Human.php');
require_once('CaracterRace/Elf.php');
require_once('CaracterRace/Halfling.php');
require_once ('CaracterRace/Dwarf.php');

$heroName=$_SESSION['heroName'];
$heroSurname=$_SESSION['heroSurname'];
$heroSex=$_SESSION['sex'];
$heroRace=$_SESSION['race'];
$heroClass=$_SESSION['class'];

echo "hello ".$heroName." ";

if($heroRace=="human"){
    $human->addHumanSkills();
    print_r($human);
}elseif($heroRace=="elf") {
    $elf->addElfSkills();
    print_r($elf);
}elseif ($heroRace=="dwarf"){
    $dwarf->addDwarfSkills();
    print_r($dwarf);
}else{
    $halfling->addHalflingSkills();
    print_r($halfling);

}







