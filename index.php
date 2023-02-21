<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$data = array (
   array('firstname'=>'Tommi','lastname'=>'Järvenpää','email'=>'tommi@email.fi'),
   array('firstname'=>'Teemu','lastname'=>'Eskola','email'=>'teemu@email.fi'),
   array('firstname'=>'Roosa','lastname'=>'Rautio','email'=>'roosa@email.fi'),
   array('firstname'=>'Sepi','lastname'=>'Jokelainen','email'=>'sepi@email.fi'),
   array('firstname'=>'Matti','lastname'=>'Pitkänen','email'=>'matti@email.fi')
);
$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;