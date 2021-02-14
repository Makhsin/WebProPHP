<?php
    Echo getcwd()."<br>";
    $dir = 'C:\xampp\htdocs\WebProPHP';
    $files = scandir($dir);
    foreach($files as $value){
        echo $value."<br>";
    }
    echo getcwd()."<br>";
    chdir("..\\"); //ถอยไป1ชั้น .. คือ 1 ชั้น
    echo getcwd()."<br>";
    chdir("WebProPHP\\");
    echo getcwd();
?>