<?php 

namespace App\Helper;

class Triangle{

     
    function __construct() {
        
    }

    public function TriangleType ($side1,$side2,$side3)
    {
        $type="";
        if($side1 == $side2 && $side2 == $side3){
            $type="Isosceles"; 
        }elseif($side1 == $side2 || $side1 == $side3 || $side2 == $side3){
            $type="Equilateral"; 
        }
        elseif($side1 != $side2 && $side1 != $side3 && $side2 != $side3 ){
            $type = "Scalene"; 
        }else{
            $type = "invalid"; 
        }
        return $type;
    }

}