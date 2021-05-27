<?php
function add($num1,$num2){
return $num1+$num2;
}

$a=11;
$b=22;
$c=add($a,$b);
//解析变量
echo  "$a+$b=$c";
//换行  \n也是换行字符
echo "<br>";
//不解析变量  原样输出
echo  '$a+$b=$c';
//.是拼接字符
