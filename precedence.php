<?php 
trait test{
    public function greeting(){
        echo "Greeting from trait";
    }   
}
class Base{
    public function greeting(){
        echo "Greeting from Base";
    }   
} 
class Child extends Base{
    use test;
    public function greeting()
    {
        echo "Greeting from child";
    }
}
$obj = new Child();
$obj->greeting();
?>