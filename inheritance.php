<?php

//inheritance 

class NTCE
{
    private $sname = "Hello world";

    function getName()
    {
       
        echo $this->sname;
        echo "<br>";
    }
}


class Harsh extends NTCE
{

    // public $H="harsh122";

    function getMyname()
    {
     
        echo "This is Inheritnace";
        echo "<br>";

        //    $H="harsh";

        //    echo $this->H;
        //    echo $H;

    }
}

//object of class
$ntce = new NTCE();
echo $ntce->getName();
// echo $ntce->sname;


$harsh = new Harsh();
echo $harsh->getName();
echo $harsh->getMyName();