<?php

/**
 *
 */
class Stuff extends Heros
{
    private $stuff;
    private $armor;
    private $weapon;

    protected $namearmor;
    protected $nameweapon;




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
        public function getNameArmor()
        {
            return $this->armor;
        }

        /**
         * @param mixed $armor
         */
        public function setNameArmor($namearmor)
        {
            $this->armor = $namearmor;
        }

        /**
         * @return mixed
         */
        public function getNameWeapon()
        {
            return $this->weapon;
        }

        /**
         * @param mixed $weapon
         */
        public function setNameWeapon($nameweapon)
        {
            $this->weapon = $nameweapon;
        }

}


$hero -> getStuff ();
$hero -> setStuff ();
$hero -> getNameWeapon ();
$hero -> getNameArmor ();


 ?>
