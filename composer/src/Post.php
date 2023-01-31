<?php

namespace Xavi\Composer;

use Xavi\Composer\utils\Uuid;

class Post{
    // Propieties
    private string $id;

    //Construct
    public function __construct(
        // Parameters
        private string $message
        )
    {
        echo "Was created an object";
        $this->id = Uuid::generate();
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