<?php

require 'Heros.php';
require 'Combat.php';
require 'Heros/stuff.php';
require 'Heros/classes.php';
require 'Heros/classes/viking.php';
require 'Heros/classes/knight.php';


$combat = new Combat();


$viking = new Viking();

$viking->setName("Ragnar");



$chevalier = new Chevalier();

$chevalier->setName("Esildur");

var_dump($viking);
var_dump($chevalier);


?>
