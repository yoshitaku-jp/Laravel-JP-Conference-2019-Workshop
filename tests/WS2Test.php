<?php

require_once(__DIR__ . '/../vendor/autoload.php');

class TaxTest extends PHPUnit\Framework\TestCase
{
    public function test_tax()
    {
        $tax = new Laracon\WS2();

        $this->assertEquals(105, $tax->CalPriIncTax(100, 0.05));
        $this->assertEquals(108, $tax->CalPriIncTax(100, 0.08));
        $this->assertEquals(110, $tax->CalPriIncTax(100, 0.10));
    }
}
