<?php

namespace Xavi\Composer;

use Xavi\Composer\IPost;

class PostVideo extends Post implements IPost{
    // Construct
    public function __construct(
        private string $message,
        private string $pathVideo
    )
    {
        parent::__construct($message);
    }

    // Getters
    public function getPathVideo(){
        return $this->pathVideo;
    }

    // Interface
    public function toString(): string
    {
        $info = "id: " . $this->getId() . "\n";
        $info .= "Mensaje: " . $this->getMessage() . " \n";
        $info .= "Video: " . $this->getPathVideo() . "\n\n";
        $info .= "Likes: " . count($this->getLikes()) . "\n\n";

        return $info;
    }
}