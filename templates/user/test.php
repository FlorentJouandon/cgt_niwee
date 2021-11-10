<?php
use Traits\Request;


$table = 'newsletter';
$column ='email, date';
$values = 'titi.florent@gmail.com';


$int = Request::insert($table, $column, $values);
var_dump($int);


$req = Request::findAll('newsletter');
foreach ($req as $r)
{
    echo $r[1] ; 
    echo ' | ';
}

