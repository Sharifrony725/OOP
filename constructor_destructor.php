<?php 
class test{
    //Constructor Method
    public function __construct()
    {
        echo "Constuctor started";
        echo "<br>";
    }
    public function sayHello(){
        echo "Hello, World!";
    }
      //Destructor Method
      public function __destruct()
      {
          echo "<br> Inside destructor method";
          
      }
} 
$obj = new test();
$obj->sayHello();

?>