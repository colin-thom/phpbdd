<?php

class Client
{
private $id;
private $first_name;
private $last_name;
private $adress;
private $zip;
private $city;

public function __construct($id,$first_name,$last_name,$adress,$zip,$city){
    $this->id=$id;
    $this->first_name=$first_name;
    $this->last_name=$last_name;
    $this->adress=$adress;
    $this->zip=$zip;
    $this->city=$city;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getZip()
    {
        return $this->zip;
    }
}
