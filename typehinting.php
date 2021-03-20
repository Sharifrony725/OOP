<?php 

    include "person.php";

    class Book {
        public $price ;
        public $authors;

        public function book_price(int $p){
            $this->price = $p;
        }
        // public function book_authors(array $name){
        //     $this->authors = $name;
        // }
            public function book_authors(person $person){
                $this->authors = $person->names();
            }

    }
    $book = new Book();
    $book->book_price(50);
    echo $book->price;
    echo "<br>";
    /*
    $book->book_authors(["rony" , "sharif" , "arif"]);
    echo "<pre>";
    print_r( $book->authors);
    echo "</pre>";
    echo $book->authors[2];
    */
   $object =  new person();
   $book->book_authors($object);
   echo "<pre>";
   print_r($book->authors);
   echo "</pre>";
?>
