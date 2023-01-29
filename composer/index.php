<?php
require 'vendor/autoload.php';

class Post{
    // Propieties
    private string $id = "123";

    //Construct
    public function __construct(private string $message)
    {
        echo "Was created an object";
        $this->id = uniqid();
    }

    // Methods
    private function saludo(){
        return "Hello Jav your id is: $this->id";  
    }

    //Getters
    public function getId(){
        return $this->id;
    }

    public function getMessage(){
        return $this->message;
    }

    // Setters
    public function setId(string $id){
        $this->id = $id;
        return $id;
    }

}

$object1 = new Post("This is my second post");

echo $object1->getMessage();