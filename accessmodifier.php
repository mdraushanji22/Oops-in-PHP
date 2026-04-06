<?php
class AccessMod
{
    private function questionPaper()
    {

        // echo "questions paper for students";
        return "Raushan Important looking for a job";
    }

    function exam()
    {
        if ($this->questionPaper() == "Raushan Important looking for a job") {
            echo "Do something is here";
        } else {
            echo "Do else";
        }
    }
}
$q1 = new AccessMod();
echo $q1->exam();
