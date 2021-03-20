<?php 
 //Abstract Class
 /*
 abstact class className{
     code to be excuted
 }
 */   
 abstract class element{
    abstract public function remind();
 }
 class water extends element{
     public function remind()
     {
         return get_class($this). " " . get_parent_class($this);
     }
 }
  $water =  new water();
echo $water->remind();

?>