<?php

require "vendor/autoload.php";

$todos = new \kodingAcademy\Controllers\TodoControllers;
$todo = new \kodingAcademy\Models\Todo;
$user = new \kodingAcademy\Models\User;

echo $todos->name.'<br>';
echo $todo->name.'<br>';
echo $user->name.'<br>';