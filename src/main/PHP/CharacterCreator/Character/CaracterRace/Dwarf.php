<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 20.10.2018
 * Time: 22:22
 */

class Dwarf extends Race
{
    public function __construct($Att, $Hp)
    {
        parent::__construct($Att, $Hp);
    }

    public function addDwarfSkills(){
        print ("Plotkowanie, wiedza (imperium), Język(staroświatowy)");
    }



}