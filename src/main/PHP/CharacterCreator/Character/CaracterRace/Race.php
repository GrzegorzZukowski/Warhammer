<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 20.10.2018
 * Time: 22:24
 */

class Race
{
    private $ww;
    private $us;
    private $Str;
    private $T;
    private $Ag;
    private $WP;
    private $In;
    private $Cha;
    private $Att;
    private $Hp;

    /**
     * Race constructor.
     * @param $ww
     * @param $us
     * @param $Str
     * @param $T
     * @param $Ag
     * @param $WP
     * @param $In
     * @param $Cha
     * @param $Att
     * @param $Hp
     */
    public function __construct($ww, $us, $Str, $T, $Ag, $WP, $In, $Cha, $Att, $Hp)
    {
        $this->ww = $ww;
        $this->us = $us;
        $this->Str = $Str;
        $this->T = $T;
        $this->Ag = $Ag;
        $this->WP = $WP;
        $this->In = $In;
        $this->Cha = $Cha;
        $this->Att = $Att;
        $this->Hp = $Hp;
    }

//    public function __construct(
//                                $Att,
//                                $Hp)
//    {
//        $this->Att = $Att;
//        $this->Hp = $Hp;
//    }


    public function getWw()
    {
        return $this->ww;
    }

    public function setWw($ww)
    {
        $this->ww = $ww;
    }

    public function getUs()
    {
        return $this->us;
    }

    public function setUs($us)
    {
        $this->us = $us;
    }


    public function getStr()
    {
        return $this->Str;
    }


    public function setStr($Str)
    {
        $this->Str = $Str;
    }


    public function getT()
    {
        return $this->T;
    }


    public function setT($T)
    {
        $this->T = $T;
    }


    public function getAg()
    {
        return $this->Ag;
    }

    public function setAg($Ag)
    {
        $this->Ag = $Ag;
    }


    public function getWP()
    {
        return $this->WP;
    }

    public function setWP($WP)
    {
        $this->WP = $WP;
    }

    public function getIn()
    {
        return $this->In;
    }

    public function setIn($In)
    {
        $this->In = $In;
    }

    public function getCha()
    {
        return $this->Cha;
    }

    public function setCha($Cha)
    {
        $this->Cha = $Cha;
    }

    public function getAtt()
    {
        return $this->Att;
    }

    public function setAtt($Att)
    {
        $this->Att = $Att;
    }

    public function getHp()
    {
        return $this->Hp;
    }

    public function setHp($Hp)
    {
        $this->Hp = $Hp;
    }

    public function randomAdd($feature){
        return $feature+rand(2,20);
    }

}
