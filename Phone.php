<?php


class Phone {
    public $gamintojas;
    public $metai;
    public $modelis; 
    public $bukle;

    function __construct($gamintojas = null, $metai = null, $modelis = null, $bukle = null){
        $this->gamintojas = $gamintojas;
        $this->metai = $metai;
        $this->modelis = $modelis;
        $this->bukle = $bukle;
    }



}






?>