<?php



class Heros
{


  private $pv;
  private $name;


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
