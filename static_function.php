<?php
    //static function And variable
    class NTCE{
        static $sname="Static Variable";

        static function getname(){
        echo "Hello";
        
       }

       static function sum($a,$b){
        echo $a+$b;
       }

    }

    echo NTCE::$sname;
    echo "<br>";
    NTCE::sum(22,2);
?>