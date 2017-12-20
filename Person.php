<?php

class Person
{
    private $firstname;
    private $lastname;

    public function getFirstname():string
    {
        return $this->firstname;
    }


    public function setFirstname($firstname):string
    {
        $this->firstname = $firstname;
    }


    public function getLastname():string
    {
        return $this->lastname;
    }


    public function setLastname($lastname):string
    {
        $this->lastname = $lastname;
    }


    public function Display():string{
        return " Bonjour " .$this->firstname .$this->lastname;

    }

}

$person = new Person();
$person -> setFirstname ("John");
$person -> getFirstname ();

$person -> setLastname("Doe");
$person -> getLastname();


var_dump ($person ->$display);

?>
