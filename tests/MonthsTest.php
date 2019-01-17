<?php
 
require_once('vendor/autoload.php');
 
class MonthsTest extends PHPUnit\Framework\TestCase {
    public function test_rand() {
        $month = new Laracon\Month();
        $this->assertLessThan(13, $month->Random() );
        $this->assertGreaterThan(0, $month->Random() );
    }
}