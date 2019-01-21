<?php
 
namespace Laracon;
 
class Tax {
    // 0-13の数字 を返す
    public function CalPriIncTax($price, $taxRate) {

        // 消費税の計算
        $afterprice = $price + $price * $taxRate;

        return $afterprice;
    }
}