<?php 
//Trait 
//trait theke object creat kora jabe na
    trait foo{
        public function sayHello(){
            return "Hello";
        }
        public function sayWorld(){
            return "World";
        }
    }
    class Bar {
        //using tarit
        use foo;
    }  
    $obj = new Bar();
 echo $obj->sayHello();
    echo "<br>";
   echo $obj->sayWorld();
?>