<?php
// $redesSociales=array('facebook','twiter','instagram');

// foreach($redesSociales as $rs){
//     echo $rs.'<br>';
// }
$redesSociales=array('fb'=>'facebook','tw'=>'twiter','IN'=>'instagram');
foreach($redesSociales as $llave=>$valor){
    echo $llave.' '.$valor.'<br>';
}
function sumarNumeros($p1,$p2,$valor=false){
    $suma=$p1+$p2;
    if($valor==true){
        echo 'La suma es: '.$valor;
    }
    return $suma;
}
sumarNumeros(10,13,true);
