<?php

namespace Tests\Unit;

use App\Http\Controllers\CarReservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationCarTest extends TestCase
{
     
    public function test_testcase1_reservation_car()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->reservationCar(1,1,20,"123456789123","PayPal"),"123456");
    }

    public function test_testcase2_user()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->reservationCar(6,1,20,"123456789123","PayPal"),"No user");
    }

    public function test_testcase3_car ()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->reservationCar(1,6,20,"123456789123","PayPal"),"No car");
    }

    public function test_testcase4_End_time()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->reservationCar(1,1,2,"123456789123","PayPal"),"no allow");
    }
    public function test_testcase5_driving_license()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->reservationCar(1,1,20,"1234","PayPal"),"Error driving license");
    }
     
    public function test_testcase6_payment_data()
    {
        $carReservation= new CarReservation();
        $this->assertEquals($carReservation->reservationCar(1,1,20,"123456789123","STCPay"),"Error payment data");
    }
     
}
