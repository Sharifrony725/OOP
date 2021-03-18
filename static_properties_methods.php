<?php 
    class weather
    {
        public static $tem_cond = ["cold" , "mild" , "warm" ,"hot"];
        public static function celciusToFarenheit($c){
            return $c * 9 / 5 +32;
        }
        public static function determineTemCon($f){
            if($f < 40){
                return self::$tem_cond[0];
            }else if($f < 70){
                return self::$tem_cond[1];
            }elseif ($f < 90) {
                return self::$tem_cond[2];
            }else{
                return self::$tem_cond[3];
            }
        }
    }
    print_r(weather::$tem_cond);

?>