<?php
    //Polymorphism
    class NTCE{
        function   __construct(){
            echo "Start";
        }
        function   __destruct(){
            echo "  End ";
        }

    }
    $harsh=new NTCE();
?>