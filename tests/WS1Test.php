<?php

require_once(__DIR__ . '/../vendor/autoload.php');

class WS1Test extends PHPUnit\Framework\TestCase
{
    public function test_helloworld()
    {
        $ws1 = new Laracon\WS1();
        $this->assertEquals("HelloWorld", $ws1->HelloWorld());
    }
}
