<?php
require 'vendor/autoload.php';

use Xavi\Composer\Post;
use Xavi\Composer\PostImage;
use Xavi\Composer\PostVideo;

$myobj = new Post("First post");
$postImage1 = new PostImage("Second post for image", "vacation.png");
$postVideo1 = new PostVideo("My video post", "video.mp4");
echo $myobj->getMessage();
print "\n";
echo $myobj->getSaludo();
print "\n";
echo $postImage1->getMessage();
print "\n";
echo $postImage1->getPathImage();
print "\n";
echo $postVideo1->getPathVideo();
print "\n";