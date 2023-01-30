<?php
require 'vendor/autoload.php';

use Xavi\Composer\modelos\Post;


$object1 = new Post("This is my second post");

echo $object1->getMessage();