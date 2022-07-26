<?php
namespace tests;

use App\Models\Coders;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase{

        public function test_example(){
            $this->assertEquals(1,1);
        }

        public function test_InCreateNewCodersCheckIfGetIssueAndCoderWorkCorrectly(){
            // Create new coders
            $newCoder = new Coders(null,"CoderTest","Comment for Issue");

            $resultCoderName = $newCoder->getCoder();
            $resultCoderIssue = $newCoder->getIssue();

            $this->assertEquals("CoderTest",$resultCoderName);
            $this->assertEquals("Comment for Issue",$resultCoderIssue);
        }


        
}
?>