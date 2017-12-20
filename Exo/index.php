<?php

require 'heros.php';
require 'combat.php';
require 'Heros/stuff.php';
require 'Heros/classes.php';
require 'Heros/classes/viking.php';
require 'Heros/classes/knight.php';


$combat = new Combat();


$viking = new Viking();

$viking->setName("Ragnar");
$viking->setArmor(2);
$viking->setWeapon(10);



$knight = new Chevalier();

$knight->setName("Esildur");
$knight->setArmor(10);
$knight->setWeapon(5);

var_dump($viking);
var_dump($knight);


?>
