<?php
        //Polymorphism
        class NTCE{
            // private $sname="Mihir";

            public function getName($a="",$b="")  {
                if($a=="")
                {
                echo $b;
                }  
                elseif($b=="")
                {
                    echo $a;
                } 
                else
                {
                    echo $a.$b;
                }
            }

        }   

        $harsh=new NTCE();
        // echo $harsh->getName();
        echo $harsh->getName("","B");
        echo "<br>";
        echo $harsh->getName("A","");
        echo "<br>";
        echo $harsh->getName("Harsh "," Krisha");
?>