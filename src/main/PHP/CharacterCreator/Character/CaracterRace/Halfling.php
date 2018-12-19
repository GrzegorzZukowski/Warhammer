<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 20.10.2018
 * Time: 22:22
 */

class Halfling extends Race
{
    public function __construct($Att, $Hp)
    {
        parent::__construct($Att, $Hp);
    }

    public function addHalflingSkills(){
        print ("Plotkowanie, wiedza (imperium), Język(staroświatowy)");
    }



}