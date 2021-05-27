<?php

function GetRandStr($length){
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $len = strlen($str)-1;
    $randstr = '';
    for ($i=0;$i<$length;$i++) {
     $num=mt_rand(0,$len);
     $randstr .= $str[$num];
    }
    return $randstr;   
}
asf
//传入长度
$number = GetRandStr(6);
echo "随机生成的：".$number;
?>