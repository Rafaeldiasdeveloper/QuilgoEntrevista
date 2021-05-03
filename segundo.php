<?php

function Palindromo($str){
    $input=$str;
    $inverso=strrev($input);
    if($inverso==$input){
        return true;
    }else{
        return false;
    }
}
$var=Palindromo("arara");
if($var==true){
    echo "true";
}else{
    echo "false";
}

?>