<<?php

require 'Heros/classes/viking.php';
require 'Heros/classes/knight.php';
require 'hero.php';


/**
 *
 */
class Classes extends Heros
{

  private $classes;
  protected $type;


  /**     * @return mixed     */

  public function getClasses():string
  {
      return $this->classes;
  }

  /**     * @param mixed $classes     */

  public function setClasses($classes):string
  {
      $this->classes = $classes;
  }


//Notion de if si c'est un KNIGHT ou Viking pour récuperer attaque /défense de base
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}


$classes -> getClasses ();
$classes -> setClasses ();
$classes -> getType();
$classes -> setType();


 ?>
