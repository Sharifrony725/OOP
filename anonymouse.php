<?php 
    //Anonymous
    //Example of Normal Class
 /*   class test{
        public function log(){
            return "Log Data";
        }
    }
    $obj = new test();
    echo $obj->log();
*/ 
//Example of Anonymous Class
$test = (new class {
public function log (){
    return "Log Data";
}
});
 // call the log method within the anonymous class
echo  $test->log();






?>