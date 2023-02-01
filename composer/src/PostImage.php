<?php

namespace Xavi\Composer;

use Xavi\Composer\IPost;

class PostImage extends Post implements IPost{
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
    
    // Interface
    public function toString(): string
    {
        $info = "id: " . $this->getId() . " \n";
        $info .= "Mensaje: " . $this->getMessage() . "\n";
        $info .= "Imagen: " . $this->getPathImage() . "\n";
        $info .= "Likes: " . count($this->getLikes()) . "\n\n";

        return $info;
    }
}