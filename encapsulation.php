<?php
//encapsulation
class NTCE
{
    private $sname = "Harsh";

    public function getName()
    {
        echo $this->sname;
    }
}


$ntce = new NTCE(); //object of class

// echo $ntce->sname;

echo $ntce->getName();
