<?php
class AccessMod
{
    private function questionPaper()
    {

        echo "questions paper for students";
    }

    function exam()
    {
        $this->questionPaper();
    }
}
$q1 = new AccessMod();
$q1->exam();
