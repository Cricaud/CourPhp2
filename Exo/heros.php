<?php


require 'Heros/classes.php';
require 'Heros/classes/viking.php';
require 'Heros/classes/knight.php';
require 'Heros/Stuff.php';
require 'Combat.php';
require 'Heros/classes/Combat.php';

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

    public function attaque() {
      /**
       * @return mixed
       */
      public function getAttaque()
      {
          return $this->attaque;
      }

      /**
       * @param mixed $attaque
       */
      public function setAttaque($attaque)
      {
          $this->attaque = $attaque;
      }

      /**
       * @return mixed
       */
      public function getDefence()
      {
          return $this->defence;
      }

      /**
       * @param mixed $defence
       */
      public function setDefence($defence)
      {
          $this->defence = $defence;
      }

      public function attaque($pa) {
          var_dump($this->getName());
          $this->setPv($this->getPv() - ($pa - $this->getDefence()));
          var_dump($this->getPv());
          var_dump($this->getDefence());
      }
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
