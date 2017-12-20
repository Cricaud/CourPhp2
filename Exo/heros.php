<?php




class Heros
{


  private $pv= 100;
  private $name;
  private $attaque;
  private $defence;

  /* Dépend du Type de classes.php */

  protected $type;
  protected $strong;
  protected $resistance;
  protected $team;

  /*Dépend de stuff.php*/
  protected $stuff;
  protected $weapon;
  protected $armor;


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
          $attaque = $weapon + $strong;
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
          $defence = $armor + $resistance;
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
