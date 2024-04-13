<?php 

$file = 'user.txt';

if(file_exists($file)){
   // echo readfile($file);

   $handle = fopen($file, 'r');
   $content = fread($handle, filesize($file));
   fclose($handle);
   echo $content;
}else{
    $handle = fopen($file, 'w');
    $content = 'sage' . PHP_EOL . 'ibmk' . PHP_EOL . 'coder';
    fwrite($handle, $content);
    fclose($handle);
}


?>