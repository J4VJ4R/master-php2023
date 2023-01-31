<?php

namespace Xavi\Composer;

class PostImage extends Post{
    // Proprieties

    // Construct
    public function __construct(
        private string $mensaje,
        private string $pathImage
    )
    {
        print "\n";
        echo "Was create hineritance objetc";
        print "\n";

        parent::__construct($mensaje);
    }
    // Methods
    

    // Getters
    public function getPathImage()
    {
        return $this->pathImage;
    }
    
}