<?php
function SequenciaCrescente($array){
    $arr=$array;
    $i=sizeof($arr,1);
    $remover=0;
    $anterior=$arr[0];
    $retorno;
    for($count=0;$count<$i-1;$count++){
   		if($i==2){
        	return  "TRUE";
        }if($arr[$count+1]<=$arr[$count]){
              $remover++;
              $t1= $count+2<$i && $arr[$count+2]<=$arr[$count];
              $t2= $count-1>=0  && $arr[$count+1]<=$arr[$count-1];
              if($t1 && $t2 || $remover>=2)
              	return "FALSE";
   		  }
   }
   return "TRUE";
    
        
        
    
}
echo( SequenciaCrescente([3, 6, 5, 8, 10, 20, 15] ) );

?>
