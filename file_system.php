<?php 

// $quotes = readfile('readme.txt');

// echo $quotes;

$file = 'readme.txt';

if(file_exists($file)){
    //read the file
    echo readfile($file). '<br>';

    //copy file
    copy($file, 'quote.txt');

    //absolute path
    echo realpath($file);

    //check file size
    echo filesize($file). '<br>';

    //rename file
    // rename($file, 'text.txt');
}
else{
    echo 'file does not exist';
}

//how to make a directory
// mkdir('sage');

try{
    $exp = throw new Exception("new file");
    mkdir('sage');
}catch (Exception $e){
   echo "caught Exception: " .$e->getMessage();
}



