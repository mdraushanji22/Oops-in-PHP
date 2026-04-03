<?php

class Constructor
{

    public $name;

    function __construct($name)
    {

        echo $this->name = $name;
    }
}
$cd = new Constructor("Hey, Raushan How are you");
