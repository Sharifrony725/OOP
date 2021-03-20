<?php 
$message =  "This is from Constructor method";
$test = (new  class($message){
    public function __construct($message)
    {
        echo $message;
        echo "<br>";
    }
    public function log($msg){
        return $msg;
    }
});
echo $test->log("this is from log nethod");

?>