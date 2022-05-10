<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarReservation extends Controller
{
    public $carType=[1,2,3,4]; 
    public $availableLocations =['a','b','c','d','e','f']; 
    public $availableUsers=[1,2,3,4,5];
    public $availableCars=[1,2,3,4,5];
    public $paymentMethod =["PayPal","visa"];
    public $startTime="08:00:00";
    public $closeTime="23:00:00";


    public function searchCars($start,$end,$startLocation,$endLocation,$type)
    {
        if($start>$this->startTime && $start<$this->closeTime){
            if($end>$this->startTime && $end<$this->closeTime){
                if(in_array($startLocation, $this->availableLocations)){
                    if(in_array($endLocation, $this->availableLocations)){
                        if(in_array($type, $this->carType)){
                            return ["car1","car2","car3"];
                        }
                    }
                }
            }    
        } 
            return "no cars";  
    }

    public function reservationCar($userID,$carID,$age,$drivingLicense,$payment)
    {
        if(in_array($userID, $this->availableUsers)){
            if(in_array($carID, $this->availableCars)){
                if($age>18){
                    if(strlen($drivingLicense)==12){
                        if(in_array($payment, $this->paymentMethod)){
                            return  "123456";
                        }else{ return  "Error payment data";}
                    }else{ return  "Error driving license";}
                }else{ return  "no allow";}
            } else{ return  "No car";}
        }else{ return  "No user";}
        return  "Error";
    }
}
