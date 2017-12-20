<?php

require 'Heros.php';
require 'Heros/classes.php';
require 'Heros/classes/viking.php';
require 'Heros/classes/knight.php';
require 'Heros/stuff.php';


$heros = new Heros();

$heros->setname('John');
$heros->setPv(100);


var_dump($heros->display(" Héro :"));

$classes = new Classes();

$classes->setClasses('Knight');
$classes->setTypes(CAC-Dps);

var_dump($classes->display("La classe est"));

$stuff=new Stuff();
$stuff->setArmor('Armor of Knight');
$stuff->setWeapon('Sword of Knight');

var_dump($stuff->display("Il dispose d'un stuff"));

?>
