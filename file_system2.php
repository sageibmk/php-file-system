<?php 

$file = 'readme2.txt';

//opening a file to read
$handle = fopen($file, 'a+');

//read the file
echo fread($handle, filesize($file)) .'<br>';

// echo fread($handle, 112) .'<br>';

//reading a specific size 
// echo fgets($handle) . '<br>';

// fwrite($handle, "\nthis is a new text and line") ."<br>";

//close the file
fclose($handle);

//to delete a file
// unlink($file);
