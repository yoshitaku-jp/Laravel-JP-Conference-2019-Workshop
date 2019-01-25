<?php
 
require_once('vendor/autoload.php');
 
class PlusTest extends PHPUnit\Framework\TestCase {
    public function test_add() {
        $sample = new Laracon\Plus();
        $this->assertEquals(10, $sample->Add(4, 6));
    }
}