<?php

interface User
{
    public function find($name);
    public function username();
}

class DatabaseMysql implements User
{
    // protected $name = 'kodingacademy';

    // public function username()
    // {
    //     return 'helo';
    // }
    // public function find($name)
    // {
    //     return 'hello '.$name;
    // }
}
// contoh penggabungan antara interface and inheritance
class DatabasePgsql extends DatabaseMysql implements User
{
    public function username()
    {
        return $this->name;
    }

    public function find($name)
    {
        return 'hello '.$name;
    }
}

$postge = new DatabasePgsql;
$mysql = new DatabaseMysql;
// echo $data->find('iqbal');
echo $postge->username();
echo $mysql->find('iqbal');