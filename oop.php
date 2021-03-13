<?php 
//oop = object oriented programming
//oop is a coding methodology /style
//makes our code  more modular reuseable
//makes our code easier to maintain
//makes it easier to debug when things  go wrong
//classes are like blueprint for objects
//procedural,, variable =oop,,, properties 
//procedural,,, function =oop,, method
//Visibility/Access modifier = 1.public 2.private 3.protected
/*
class className {
    //code to be executed
}
*/
class User{
public $userName = "rony"; 
public $email = "rony@gmail.com";
public $addess = "dhaka";
private $age = 22;
public function addFriend (){
echo "this method is add friend";
}
}
//creating object
//$object = new className();
//Dart notation = ->
$user1 = new User();
$user2 = new User();
//Property access using object
echo $user1->userName . "<br>" ;
echo $user1->email . "<br>" ; 
echo $user1->addess . "<br>" ;
//Method access using object
$user1->addFriend();
echo "<hr>";
//Assign value to properties using object
$user2->userName = "sharif";
$user2->email = "sharif@gmail.com";
$user2->addess = "Feni";

echo $user2->userName . "<br>" ;
echo $user2->email . "<br>" ; 
echo $user2->addess . "<br>" ;
$user2->addFriend() ;
echo "<br>";
//get_class
echo get_class($user1);
echo "<pre>";
print_r(get_class_vars('User'));
echo "</pre>";
















?>