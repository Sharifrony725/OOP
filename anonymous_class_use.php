<?php 
//interface that will be implement
//only abstract method
//abstract method a only name and parameter thakbe body thakbe na
interface testInterface{
    public function getMessage();
} 

/**
* tarit that will be use
 **/
trait traitTest
{
    public function sayHello(){
        echo "<br> Hello I am from trait";
    }    
}
/* 
class that will be extended
*/
class myClass{
    public function __construct($message){
        echo $message;
    }
}
$message = "This class extend myClass";
/**
 * anonymous class
 */
$test = (new class($message) extends myClass implements testInterface {
    public function log($msg){
        echo "<br>";
        return $msg;
    }
    public function getMessage(){
        return "<br> I am actually come from interface";
    }
    use traitTest;
});
echo $test->log("From log method");
echo $test->getMessage();
echo $test->sayHello();
?>