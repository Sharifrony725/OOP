<?php 
//getters and setters
class user{
    public $userName;
    private $email;
    public  function __construct($u,$e){
        $this->userName = $u;
        $this->email = $e;
    }
    public function addfriend(){
        return "$this->email added a new friend";
    }
    //getter
    public function getEmail(){
        return $this->email;
    }
    //setter
    public function setEmail($emailAddress){
        $this->email = $emailAddress;
    }
}




$user1 = new user("rony", "rony@gmail.com" );
$user2 = new user( "sharif" , "sharif@gmail.com");
echo $user1->getEmail();
echo "<br>";
$user3 =  new user("kamrul", "kamrul@gmail.com");
//$user3->email = "kamrul@yahoo.com"; 
$user3->setEmail("kamrul@yahoo.com");
echo $user3->getEmail();
?>