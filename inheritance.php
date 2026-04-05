<?php
class UserAuth
{

    function login($userType)
    {

        echo " $userType User LOgged in  ";
    }
}
class Students extends UserAuth
{
    function getName()
    {
        echo "Raushan";
    }
}
class Teacher extends UserAuth
{
    function getSkill()
    {
        echo "DSA";
    }
}
$s1 = new Students();
$s1->login("student");
$s1->getName();
echo "<br>";
$t1 = new Teacher();
$t1->getSkill();
