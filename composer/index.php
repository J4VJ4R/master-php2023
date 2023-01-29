<?php
require 'vendor/autoload.php';

class Post{
    // Propieties
    private string $id = "123";


    // Methods
    private function saludo(){
        return "Hello Jav your id is: $this->id";  
    }

    //Getters
    public function getId(){
        return $this->id;
    }

    // Setters
    public function setId(string $id){
        $this->id = $id;
        return $id;
    }

}

$object1 = new Post;

echo $object1->setId('etc_123');