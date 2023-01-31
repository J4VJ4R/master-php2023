<?php

namespace Xavi\Composer;

class PostVideo extends Post{
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
}