<?php

class Coin {
    private $salis;
    private $verte;
    private $pagaminimometai;
    private $medziaga;
    
    function __construct() {
        
    }

    public function getSalis()
    {
        return $this->salis;
    }

    public function setSalis($salis)
    {
        $this->salis = $salis;
    }

    public function getVerte()
    {
        return $this->verte;
    }

    public function setVerte($verte)
    {
        $this->verte = $verte;
    }

    public function getPagaminimometai()
    {
        return $this->pagaminimometai;
    }

    public function setPagaminimometai($pagaminimometai)
    {
        $this->pagaminimometai = $pagaminimometai;
    }

    public function getMedziaga()
    {
        return $this->medziaga;
    }

    public function setMedziaga($medziaga)
    {
        $this->medziaga = $medziaga;
    }



}



?>