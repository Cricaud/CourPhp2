<<?php

require 'Heros/classes/viking.php';
require 'Heros/classes/knight.php';

/**
 *
 */
class Classes extends Heros
{

  private $classes;
  protected $attaque;
  protected $defence;


  /**     * @return mixed     */

  public function getClasses()
  {
      return $this->classes;
  }

  /**     * @param mixed $classes     */

  public function setClasses($classes)
  {
      $this->classes = $classes;
  }

}


$hero -> getClasses ();
$hero -> setClasses ();


 ?>
