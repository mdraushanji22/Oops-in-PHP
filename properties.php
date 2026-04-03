<?php
class Properties
{
    public $name = "Raushan Jilani";

    function getName()
    {
        return $this->name;
    }
    function updateName()
    {
        $this->name = "Md Raushan Jilani";
    }
}
$p1 = new Properties();
// echo $p1->name;
echo $p1->updateName();
echo $p1->getName();
