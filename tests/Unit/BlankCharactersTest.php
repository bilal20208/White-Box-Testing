<?php

namespace Tests\Unit;

use App\Helper\StringHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlankCharactersTest extends TestCase
{
     
    public function test_testcase1_empty()
    {
       /*  $response = $this->get('/');

        $response->assertStatus(200); */
        $stringHelper= new StringHelper();
        $this->assertEquals($stringHelper->replaceSequencesOfBlank(""),"","true");
    }

    public function test_testcase2_one_blank ()
    {
        $stringHelper= new StringHelper();
        $this->assertEquals($stringHelper->replaceSequencesOfBlank("he llo"),"he llo","true");
    }

    public function test_testcase3_Sequans_blank_char ()
    {
        $stringHelper= new StringHelper();
        $this->assertEquals($stringHelper->replaceSequencesOfBlank("hello        bilal"),"hello bilal","true");
    }

    public function test_testcase4_more_than_one_blank()
    {
        $stringHelper= new StringHelper();
        $this->assertEquals($stringHelper->replaceSequencesOfBlank("hello        bilal and  ahmed"),"hello bilal and ahmed","true");
    }
    public function test_testcase5_blank_char_in_first()
    {
        $stringHelper= new StringHelper();
        $this->assertEquals($stringHelper->replaceSequencesOfBlank("   hello bilal")," hello bilal","true");
    }
    public function test_testcase6_blank_char_in_last()
    {
        $stringHelper= new StringHelper();
        $this->assertEquals($stringHelper->replaceSequencesOfBlank("hello bilal    "),"hello bilal ","true");
    }
}
