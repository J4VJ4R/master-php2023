<?php
require 'vendor/autoload.php';

use Xavi\Composer\Post;
use Xavi\Composer\PostImage;
use Xavi\Composer\PostVideo;
use Xavi\Composer\User;

$marcos = new User("Marcos Rivas", "vidamrr", "vidamr@hotmail.com", "123abc");
$nieves = new User("Nieves Norteña", "Nievesepa", "Nievesepa@hotmail.com", "abc123");
$omar = new User("Omar Lazo", "OmarFlaco", "OmarFlaco@hotmail.com", "123dej");
$pablo = new User("Pablo Perez", "Pablopollo", "Pablopollo@hotmail.com", "123ajk");


$marcosPost = new PostImage("De vacaciones en Miami", "miami.jpg");
$nievesPost = new PostVideo("De vacaciones en Londre", "miami.mp4");
$omarPost = new PostImage("De vacaciones en Qebet", "miami.jpg");
$pabloPost = new PostVideo("De vacaciones en Tokio", "miami.avi");

$marcos->publish($marcosPost);
$nieves->publish($nievesPost);
$nieves->publish($nievesPost);
$nieves->publish($nievesPost);
$omar->publish($omarPost);
$pablo->publish($pabloPost);

$marcosPost->addLike($nieves);
$marcosPost->addLike($omar);

$nievesPost->addLike($marcos);
$nievesPost->addLike($nieves);
$nievesPost->addLike($omar);
$nievesPost->addLike($pablo);

$omarPost->addLike($marcos);
$omarPost->addLike($omar);
$omarPost->addLike($pablo);

$marcos->addFollower($nieves);
$marcos->addFollower($omar);
$marcos->addFollower($pablo);

$nieves->addFollower($marcos);
$nieves->addFollower($omar);

$omar->addFollower($nieves);


print_r("\n" . User::showProfile($marcos));
print_r(User::showProfile($nieves));
print_r(User::showProfile($omar));
print_r(User::showProfile($pablo));

print_r($marcosPost->toString());
print_r($nievesPost->toString());
print_r($omarPost->toString());
print_r($pabloPost->toString());
