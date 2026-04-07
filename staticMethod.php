<?php
class greeting
{
    // static method
    public static function welcome()
    {
        echo "Hello World!";
    }
    public static function getName($name)
    {
        echo $name;
    }
    public static function age()
    {
        echo "My Age is: 24";
    }
}

// Call static method directly
greeting::welcome();
echo "<br>";
greeting::getName("Md Raushan Jilani");
echo "<br>";
greeting::age();
