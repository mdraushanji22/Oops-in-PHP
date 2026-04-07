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
}

// Call static method directly
greeting::welcome();
echo "<br>";
echo "<br>";

greeting::getName("Md Raushan Jilani");
