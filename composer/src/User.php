<?php

namespace Xavi\Composer;

use Xavi\Composer\utils\Uuid;

class User{
    // Proprieties
    private string $id;
    private array $posts;
    private array $followers;

    // Construct
    public function __construct(
        private string $name,
        private string $username,
        private string $email,
        private string $password
        )
        {
            // Initialize variables
            $this->id = Uuid::generate();
            $this->posts = [];
            $this->followers = [];
        }
    // Getters
    public function getId(){
        return $this->id;
    }

    public function getUsername():string{
        return $this->name;
    }
    // Methods
    public function publish(Post $post){
        array_push($this->posts, $post);
    }
    // Getters
    public function getPosts():array{
        return $this->posts;
    }

    public function getFollowers():array{
        return $this->followers;
    }
    // Methods

    public function showPosts(){
        foreach($this->posts as $post){
            var_dump($post->toString());
        }
    }
    private function hasFollower(User $user){
        $found = array_filter(
            $this->followers,
            fn (User $followers) => $followers->id === $user->id
        );
        return count($found) === 1;
    }
    public function addFollower(User $user){
        if(!$this->hasFollower($user)){
            if($this->id === $user->id){
                print_r("No te puedes agregar a ti mismo como followers \n");
            }else{
                array_push($this->followers, $user);
            }
        }else{
            print_r("El usuario " . $user->getUsername() . " ya es un follower \n");
        }
    }

    public static function showProfile(User $user){
        $profile = "Nombre: " . $user->getUsername() . "\n";
        $profile .= "Followers: " . count($user->followers) . "\n";
        $profile .= "Posts: " . count($user->posts) . "\n";

        return $profile;
    }
    

}