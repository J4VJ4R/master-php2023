<?php
require 'vendor/autoload.php';

use Xavi\Composer\Post;
use Xavi\Composer\PostImage;

$myobj = new Post("First post");
$postImage1 = new PostImage("Second post", "vacation.png");
echo $myobj->getMessage();
print "\n";
echo $postImage1->getMessage();
print "\n";
