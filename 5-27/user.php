<?php

if(empty($_POST)){
    die("没有提交数据");
}

$user_info=[];
// print_r($_POST);
foreach($_POST as $k=>$v){
    $input=trim($v);
    if(empty($input)){
        die($k."字段不能为空");
    }
    $user_info[$k]=$input;
}
$patten="/^[a-zA-Z]{6,}$/";
if(!preg_match($patten,$user_info['a'])){
    die("用户名不符合规则 ");
}

$b=$_POST['b'];
$czt="/^\w{6,18}@[a-z0-9]+.[a-z0-9]+$/";

if(!preg_match($czt,$b)){
    echo"Email不符合规则";
}

$c=$_POST['c'];
$tv="/^1[3-9]\d{9}$/";

if(!preg_match($tv,$c)){
    echo"手机号不符合规则";
}

$d=$_POST['d'];
$ct="/^[a-zA-Z0-9]{6,20}$/";

if($user_info['d']!==$user_info['d1']){
    die("密码和确认密码必须一致");
}

echo "注册成功";

?>