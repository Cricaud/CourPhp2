<?php

require 'Heros.php';
require 'Heros/classes.php';
require 'Heros/classes/viking.php';
require 'Heros/classes/knight.php';
//require 'Heros/stuff.php';




+$viking = new Viking();

$viking->setName("Boby");
$viking->setArme("Hache");



$chevalier = new Chevalier();

$chevalier->setName("Boby");
$chevalier->setArme("Hache");

var_dump($viking);
var_dump($chevalier);


?>
