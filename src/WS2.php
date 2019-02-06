<?php

namespace Laracon;

class WS2
{
    // 消費税計算後の値 を返す
    public function CalPriIncTax($price, $taxRate)
    {
        $afterprice = $price + $price * $taxRate;

        return $afterprice;
    }
}
