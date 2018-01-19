<?php
header('Access-Control-Allow-Origin: *');
ini_set('memory_limit', '-1');
$file = 'people.txt';
$name=_POST['name'];
$cityname=_POST['cityname'];
echo "name";
$current = file_get_contents($file);

$t=time();
$tm=(string)($t);
$current .= $name." ".$cityname." ".$tm ."\n";

file_put_contents($file, $current);
?>