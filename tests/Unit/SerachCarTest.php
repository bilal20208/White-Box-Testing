<?php

namespace Tests\Unit;

use App\Http\Controllers\CarReservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SerachCarTest extends TestCase
{
     
    public function test_testcase1_Start_time()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->searchCars("08:30:00","23:30:00",'a','a',1),"no cars");
    }

    public function test_testcase2_End_time()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->searchCars("07:00:00","22:00:00",'a','a',1),"no cars");
    }

    public function test_testcase3_Start_time ()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->searchCars("07:59:00","22:00:00",'a','a',1),"no cars");
    }

    public function test_testcase4_End_time()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->searchCars("10:30:00","23:01:00",'a','a',1),"no cars");
    }
    public function test_testcase5_start_location()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->searchCars("08:30:00","20:00:00",'r','a',1),"no cars");
    }
    public function test_testcase6_return_location()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->searchCars("08:30:00","20:00:00",'a','r',1),"no cars");
    }
    public function test_testcase7_car_type()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->searchCars("08:30:00","20:00:00",'a','a',7),"no cars");
    }
    public function test_testcase8_Available_cars()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->searchCars("08:30:00","20:00:00",'a','a',1),["car1","car2","car3"]);
    }
}
