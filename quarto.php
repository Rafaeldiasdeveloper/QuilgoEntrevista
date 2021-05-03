<?php

function SequenciaCrescente($array){
    $arr=$array;
    $i=sizeof($arr);
    $remover=0;
    $anterior=$arr[0];


    for($count=0;$count<$i;$count++){
        if($count>1){   
            $anterior=$arr[$count-1];
        }
        if($arr[$count]<$anterior){
            $remover=$remover+1;
        }
    }
    if($remover>1){
        echo "false";
    }else{
        echo "true";
    }
}

SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);

?>