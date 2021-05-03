<?php

echo "
    <form method='post' action=".$_SERVER['PHP_SELF'].">
        <input type='number' name='num' placeholder='num'>
        <br>
        <input type='submit'>
    </form>
";

function CalculaArea ($num){

    if($num==0){
        return;
    }
    elseif($num==1){
         $qtd_quadrados=1;
    }else{
        $qtd_quadrados=abs($num)**2+($num-1)**2; //Abs porque não existem áreas com medidas negativas
    }

    return $qtd_quadrados;
}

if(isset($_POST['num'])){
    $num=$_POST['num'];
    $qtd_quadrados=CalculaArea($num);
    echo $qtd_quadrados;

}


?>