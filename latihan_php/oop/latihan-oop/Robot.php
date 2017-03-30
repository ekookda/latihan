<?php

class Robot
{
    # property
    public $suara;
    public $berat;

    # method/function
    public function __construct()
    {
        $this->suara = $this->set_suara('nguk..ngukkk');
    }

    public function set_suara($suara)
    {
        $this->suara = $suara;
    }

    public function get_suara()
    {
        return $this->suara;
    }
}
