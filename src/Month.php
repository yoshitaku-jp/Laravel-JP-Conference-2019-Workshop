<?php
 
namespace Laracon;
 
class Month {
    // 0-13の数字 を返す
    public function Random() {
        $min = 0;
        $max = 13;
        return rand($min, $max);
    }
}