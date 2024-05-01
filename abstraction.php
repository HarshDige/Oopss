<?php

// abstraction

abstract class NTCE
{
  private $sname = "Mihir";

  public function getName()
  {
    echo $this->sname;
  }
}


class Harsh extends NTCE
{
  public function setname()
  {
    //use abstract class methods
    $this->getName();
  }
}


// $ntce=new NTCE(); 
//abstract class not create objects


$harsh = new Harsh();
echo $harsh->getName();
echo $harsh->setname();
