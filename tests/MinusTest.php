<?php
 
require_once('vendor/autoload.php');
 
class MinusTest extends PHPUnit\Framework\TestCase {
    public function test_sub() {
        $sample = new Laracon\Minus();
        $this->assertEquals(1, $sample->Sub(7, 6));
    }
}