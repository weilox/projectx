<?php

if($_POST["text"]){
    $text = $_POST["text"];
    file_put_contents("messsages.txt",$text .PHP_EOL, FILE_APPEND);
}
?>