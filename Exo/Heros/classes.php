<<?php




/**
 *
 */
class Classes extends Heros
{

  private $classes;
  protected $type;


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


$heros -> getClasses ();
$heros  -> setClasses ();



 ?>
