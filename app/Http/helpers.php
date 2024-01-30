<?php 
    function myCountry(){
        return "Bangladesh";
    }

    function calculate($marks){
        if($marks<33){
            $result = 'This student failed';
        }else{
            $result = 'This student passed';
        }

        return $result;
    }
?>