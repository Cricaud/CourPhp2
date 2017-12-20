<?php

/**
 *
 */
class Stuff extends Heros
{
    private $stuff;
    private $armor;
    private $weapon;




        /**     * @return mixed     */

        public function getStuff()
        {
            return $this->stuff;
        }

        /**     * @param mixed $stuff     */
        public function setStuff($stuff)
        {
            $this->stuff = $stuff;
        }

        /**
         * @return mixed
         */
        public function getArmor()
        {
            return $this->armor;
        }

        /**
         * @param mixed $armor
         */
        public function setArmor($armor)
        {
            $this->armor = $armor;
        }

        /**
         * @return mixed
         */
        public function getWeapon()
        {
            return $this->weapon;
        }

        /**
         * @param mixed $weapon
         */
        public function setWeapon($weapon)
        {
            $this->weapon = $weapon;
        }

}


$hero -> getStuff ();
$hero -> setStuff ();
$hero -> getWeapon ();
$hero -> getArmor ();


 ?>
