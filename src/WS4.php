<?php
 
namespace Laracon;
 
class WS4 {
    // 月の日数 を返す
    public function getDays($month) {
        if($month == 2){
            return 28;
        } else if(($month == 4) || ($month == 6) || ($month == 9) || ($month == 11)){
            return 30;
        }else if(($month == 1) || ($month == 3) || ($month == 5) || ($month == 7) || ($month == 8) || ($month == 12)){
            return 31;
        }else{
            return 0;
        }
    }
}