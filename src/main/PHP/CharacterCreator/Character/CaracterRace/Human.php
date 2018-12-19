<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 20.10.2018
 * Time: 22:10
 */
require_once('Race.php');
class Human extends Race
{

    public function __construct($Att, $Hp)
    {
        parent::__construct($Att, $Hp);
    }

   public function addHumanSkills(){
        print ("Plotkowanie, wiedza (imperium), Język(staroświatowy)");
   }



}