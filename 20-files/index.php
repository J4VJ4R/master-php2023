<?php

// Open
$file = fopen("file.txt", 'a+');

// Read
while(!feof($file)){
    $openfile = fgets($file);
    echo $openfile."</br>";
}

// Set the pointer at the end of the file
fseek($file, 0, SEEK_END);
// Write
fwrite($file, "This is a new text line sde test");

//  Close
fclose($file);


