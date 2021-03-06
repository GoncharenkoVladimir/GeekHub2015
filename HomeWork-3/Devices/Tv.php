<?php

namespace Devices;


class Tv extends Device implements TvInterface
{
    public $parametrListOfTv = array();
    private $volume;
    private $chanel;

    public function __construct($vol, $cha){
        $this->volume = $vol;
        $this->chanel = $cha;
    }
    public function checkNextChanel()
    {
        $this->chanel+=1;
        echo 'Chanel '.$this->chanel.'<br>';
    }

    public function checkPrevChanel()
    {
        $this->chanel-=1;
        echo "Chanel $this->chanel";
    }

    public function upVolume()
    {
        $this->volume+=1;
        echo 'Volume '.$this->volume;
    }

    public function downVolume()
    {
        $this->volume-=1;
        echo 'Volume '.$this->volume;
    }

    public function onTv()
    {
        $this->status = true;
        echo 'TV on!!!';
    }

    public function offTv()
    {
        $this->status = false;
        echo 'TV off!!!';
    }

    public function showPage(){
        echo "This page showing in TV devices<br>";
    }
}