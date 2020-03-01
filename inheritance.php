<?php

// class induk / parent
class User
{
    private $status = 'tidak punya';

    public $public = ['tyo', 'ehsan', 'iqbal'];

    public function fullName()
    {
        return $this->status;
    }
}

// class anak / child
class Mobil extends User
{
    public function namaTipe()
    {
        // var_dump($this->public);
        return $this->fullName(). $this->status. $this->public[2]. " mobil dengan type x32-ml <br>";
    }
}

// class anak / child
class Motor extends Mobil
{
    public function merek()
    {
        return $this->namaTipe(). $this->fullName(). $this->status.  ' motor dengan type J-2341-ML';
    }
}
$user = new User;
$mobil = new Mobil;
$motor = new Motor;

echo $user->fullName();
echo $mobil->namaTipe();
echo "<br>";
echo $motor->merek();

