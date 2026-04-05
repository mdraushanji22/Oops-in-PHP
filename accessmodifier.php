<?php
class AccessMod
{
    private function questionPaper()
    {

        // echo "questions paper for students";
        return "Raushan Important";
    }

    function exam()
    {
        if ($this->questionPaper() == "Raushan Important") {
            echo "Do something";
        } else {
            echo "Do else";
        }
    }
}
$q1 = new AccessMod();
echo $q1->exam();
