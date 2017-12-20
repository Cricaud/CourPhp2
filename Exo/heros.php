<?php


require 'Heros/classes.php';
require 'Heros/classes/viking.php';
require 'Heros/classes/knight.php';
require 'Heros/stuff.php';

class Heros
{


  private $pv= 100;
  private $name;

  /* Dépend du Type de classes */
  protected $attaque;
  protected $defence;
  protected $type;
  protected $stuff;
  protected $weapon;
  protected $armor;
  protected $team;


/** * */



    /**
     * @return mixed
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * @param mixed $life
     */
    public function setPv($pv)
    {
        $this->pv = $pv;
    }

    public function Combat(){

    }





    public function Display(){
      return "Le héro est équipé " .$this->stuff ."c'est un " .$this->classes ."son nom est " .$this->name ." il a " .$this->pv ." Pv.";
    }

}

$hero = new Heros();


$hero -> getPv ();
$hero -> setPv ();

$hero -> getName ();
$hero -> setName ();
 ?>
