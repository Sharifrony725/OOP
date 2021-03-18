<?php 
class user{
    public  $username;
    public $email;
    public $role = "member";
    public function __construct($u , $e )
    {
        $this->username = $u;
        $this->email = $e;
    }
    public function message(){
        return "$this->email added a new  friend";
    } 
}
 class adminUser extends user {
    public $role = "admin";
    public $lavel;
    public function __construct($u , $e , $l){
        $this->lavel = $l;
        parent::__construct($u , $e);
    }
    public function message(){
        return "$this->email , an admin,added a new users" ;
    }
 }

 $user1 = new user("rony" , "rony@gmail.com");
 $user2 = new user("sharif","sharif@gmail.com"); 
 $user3 = new adminUser("arif" ,"arif@gmail.com" ,5);
echo    $user1->role;
echo "<br>";
echo $user2->role;
echo $user3->role;
echo "<br>";
echo $user3->username;
echo "<br>";
echo $user3->email;
echo "<br>";
echo $user2 ->message();


 /*
 echo "<pre>";
 print_r(get_class_vars("user"));
 echo "</pre>";
 

 echo "<pre>";
 print_r(get_class_vars("adminUser"));
 echo "</pre>";

 echo "<br>";

 echo "<pre>";
 print_r(get_class_methods("adminUser"));
 echo "</pre>";
 echo "<br>";

 echo "<pre>";
 print_r(get_class_methods("user"));
 echo "</pre>";
 */
?>