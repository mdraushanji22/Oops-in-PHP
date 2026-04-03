<?php

class Constructor
{

    public $name = "Jilani";

    function __construct()
    {

        echo $this->name;
    }
}
$cd = new Constructor();
