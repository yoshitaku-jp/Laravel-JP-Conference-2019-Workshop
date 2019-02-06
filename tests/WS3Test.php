<?php

require_once(__DIR__ . '/../vendor/autoload.php');
 
class WS3Test extends PHPUnit\Framework\TestCase {
    public function test_FizzBuzz() {
        $ws3 = new Laracon\WS3();
        $this->assertEquals("Fizz", $ws3->FizzBuzz(3));
        $this->assertEquals("Buzz", $ws3->FizzBuzz(5));
        $this->assertEquals("FizzBuzz", $ws3->FizzBuzz(15));

    }
}