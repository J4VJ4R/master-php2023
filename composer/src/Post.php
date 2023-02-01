<?php

namespace Xavi\Composer;

use Xavi\Composer\utils\Uuid;

class Post{
    // Propieties
    private string $id;
    private array $likes = [];

    //Construct
    public function __construct(
        // Parameters
        private string $message
        )
    {
        echo "Was create object";
        $this->id = Uuid::generate();
    }

    // Methods
    protected function saludo(){
        return "Hello Jav your id is: $this->id";  
    }

    //Getters
    public function getId(){
        return $this->id;
    }

    public function getMessage(){
        return $this->message;
    }

    public function getSaludo(){
        return $this->saludo();
    }

    // Setters
    public function setId(string $id){
        $this->id = $id;
        return $id;
    }

    public function getLikes(){
        return $this->likes;
    }

    protected function checkIfUserLiked(User $user):bool{
        $found = array_filter(
            $this->likes,
            function(Like $like) use ($user){
                return $like->getUser()->getId() === $user->getId();
            }
        );
        return count($found) === 1;
    }
    public function addLike(User $user){
        if($this->checkIfUserLiked($user)){
            $this->removeLike($user);
        }else{
            $like = new Like($user);
            array_push($this->likes, $like);
        }
    }

    public function removeLike(User $user){
        $this->likes = array_filter(
            $this->likes,
            fn (Like $like) => $like->getUser()->getId() != $user->getId()
        );
    }

}