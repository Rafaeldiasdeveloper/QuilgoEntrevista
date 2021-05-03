<?php

$era;

function calcula_seculo($ano){
    if($ano==0||abs($ano)<100){
        $seculo=1;
    }elseif(abs($ano)>100){
        $seculo=ceil($ano/100);
    }
    return $seculo;
}


echo "
    <form method='post' action=".$_SERVER['PHP_SELF'].">
        <input type='number' name='ano'>
        <br>
        <input type='submit'>
    </form>
";



if(isset($_POST['ano'])){
  $ano=$_POST['ano'];

  $seculo=calcula_seculo($ano);

  if($ano<=0){
    $era="antes de Cristo";
  }else{
    $era="depois de Cristo";
  }

  echo "<br>"."Ano ".$ano." Século ".$seculo." ".$era;

}


?>