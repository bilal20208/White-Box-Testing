<?php 

namespace App\Helper;

class StringHelper{


    function __construct() {
        
    }

    public function replaceSequencesOfBlank (String $var = "")
    {
        $output = preg_replace('/\s{1,}/', ' ', $var);
        
        return $output;
    }

}