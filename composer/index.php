<?php
require 'vendor/autoload.php';

class Post{
    // Propieties
    private string $id = "123";


    // Methods
    public function saludo(){
        return "Hello Jav your id is: $this->id";  
    }

}

$object1 = new Post;

echo $object1->saludo();