<?php
class MathsOperation
{

    function sum($a, $b)
    {

        return $a + $b;
    }
}
$maths = new MathsOperation();
echo $maths->sum(20, 30);
