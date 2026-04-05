<?php
class UserAuth
{

    function login($userType)
    {

        echo " $userType User LOgged in";
    }
}
class Students extends UserAuth
{
    function getName()
    {
        echo "student login";
    }
}
$s1 = new Students();
$s1->getName();
