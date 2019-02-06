<?php

require_once(__DIR__ . '/../vendor/autoload.php');
 
class WS4Test extends PHPUnit\Framework\TestCase {
    public function test_getDays() {
        $month = new Laracon\WS4();
        $this->assertEquals(31, $month->getDays(1) );
        $this->assertEquals(28, $month->getDays(2) );
        $this->assertEquals(30, $month->getDays(4) );
    }

    public function test_getDays_ThrowsInvalidArgumentException() {
        $month = new Laracon\WS4();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("引数は1-12で入力してください。");
        // 1-12 以外の月を渡す
        $month->getDays(13);
    }
}