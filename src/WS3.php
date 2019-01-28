<?php
 
namespace Laracon;
 
class WS3 {
    // FizzBuzz を返す
    public function FizzBuzz($num) {

        $result = "";

        if($num % 3 == 0){
            $result .= "Fizz";
        }

        if($num % 5 == 0){
            $result .= "Buzz";
        }

        if(!($num % 3 == 0) && !($num % 5 == 00)){
            $result .= "0";
        }
        return $result;
    }
}