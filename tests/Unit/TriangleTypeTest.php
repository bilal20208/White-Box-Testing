<?php

namespace Tests\Unit;

use App\Helper\Triangle ;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TriangleTypeTest extends TestCase
{
     
    public function test_testcase1_Isosceles()
    {
        
        $triangle= new Triangle();
        $this->assertEquals($triangle->TriangleType(1,1,1),"Isosceles");
    }

    public function test_testcase2_Equilateral()
    {
        $triangle= new Triangle();
        $this->assertEquals($triangle->TriangleType(5,5,6),"Equilateral");
    }

    public function test_testcase3_Scalene()
    {
        $triangle= new Triangle();
        $this->assertEquals($triangle->TriangleType(5,6,7),"Scalene");
    }

    public function test_testcase4_zeros()
    {
        $triangle= new Triangle();
        $this->assertEquals($triangle->TriangleType(0,0,0),"invalid");
    }
    public function test_testcase5_nigative_numbers()
    {
        $triangle= new Triangle();
        $this->assertEquals($triangle->TriangleType(-1,-1,1),"invalid");
    }
    
}
