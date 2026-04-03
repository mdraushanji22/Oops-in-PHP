<?php
class Properties
{
    public $name = "Raushan Jilani";

    function getName()
    {
        return $this->name;
    }
}
$p1 = new Properties();
echo $p1->getName();
