<?php 
    // interface interfaceName{
        //code to be excuted;
        //some methods
        //bydefault abstract hobe
    // }
    interface Database{
        //methods //visibility public hobe.
        public function listOrders();
        public function addOrder();
        public function removeOrder();

    }
    class mysqlDatabase implements Database{
        public function listOrders()
        {
            //code
            echo "List of order";
        }
        public function addOrder()
        {
            echo "Add Order";
        }
        public function removeOrder()
        {
           echo "Remove order";
        }
    }
    class oracleDatabase implements Database {
        public function listOrders()
        {
            echo "List order from oracle database";
        }
        public function addOrder()
        {
            echo "Add order from oracle database";
        }
        public function removeOrder()
        {
            echo "Remove order from oracle database";
        }
    }
        $mysql = new mysqlDatabase();
        $mysql->listOrders();
    echo "<br>";
    $mysql->addOrder();
    echo "<br>";
    $mysql->removeOrder();
    echo "<br>";
    $oracle = new oracleDatabase();
    $oracle->listOrders();
    echo "<br>";
    $oracle->addOrder();
    echo "<br>";
    $oracle->removeOrder();

?>