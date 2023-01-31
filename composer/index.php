<?php
require 'vendor/autoload.php';

use Xavi\Composer\Post;


$myobj = new Post("tu y solo tu");

echo $myobj->getMessage();