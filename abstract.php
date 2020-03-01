<?php

abstract class Transportasi
{
    protected $username = 'koding';
    abstract public function merek();
    abstract public function type();
}

class Mobil extends Transportasi
{
    public function merek()
    {
        return $this->username.' toyota '.$this->type() ;
    }

    public function type()
    {
        return 'x308';
    }

}

$data = new Mobil;
echo $data->merek();