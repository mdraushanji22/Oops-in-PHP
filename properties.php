<?php
class Properties
{
    public $name = "Raushan Jilani";

    function getName()
    {
        return $this->name;
    }
    function updateName($name)
    {
        $this->name = $name;
    }
}
$p1 = new Properties();
// echo $p1->name;
echo $p1->updateName("Raushan Bhai Delhi");
echo $p1->getName();
