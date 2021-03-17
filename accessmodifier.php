<?php 
//visibility/Accessmodifier
//public

// class father{
//     public $name = "rony";

//     public function getName(){
//       return  $this->name;
//     }
// }
// class son extends father
// {
//     public function displayFatherName(){
//       echo $this->name;
//     }
// }
// $father_object = new father();
// $son_object = new son();
// echo $father_object->name;  //Access property from outside of class
// echo "<br>";
// echo $father_object->getName(); //Access property inside class
// echo "<br>";
// $son_object->displayFatherName(); //Access property inside child class
//protected
/*
echo "<hr>";
class father{
  protected $name = "rony";

  public function getName(){
    return  $this->name;
  }
}
class son extends father
{
  public function displayFatherName(){
    echo $this->name;
  }
}
$father_object = new father();
$son_object = new son();
//echo $father_object->name;  //Access property from outside of class
echo "<br>";
echo $father_object->getName(); //Access property inside class
echo "<br>";
$son_object->displayFatherName();  //Access property inside child class
*/
class father{
  private $name = "rony";

  public function getName(){
    return  $this->name;
  }
}
class son extends father
{
  public function displayFatherName(){
    echo $this->name;
  }
}
$father_object = new father();
$son_object = new son();
//echo $father_object->name;    //Access property from outside of class
echo "<br>";
echo $father_object->getName();   //Access property inside class
echo "<br>";
//$son_object->displayFatherName();   //Access property inside child class

?>