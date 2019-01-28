<?php
 
require_once('vendor/autoload.php');
 
class WS4Test extends PHPUnit\Framework\TestCase {
    public function test_getDays() {
        $month = new Laracon\WS4();
        $this->assertEquals(31, $month->getDays(1) );
        $this->assertEquals(28, $month->getDays(2) );
        $this->assertEquals(30, $month->getDays(4) );
        $this->assertEquals(0, $month->getDays(13) );
    }
}