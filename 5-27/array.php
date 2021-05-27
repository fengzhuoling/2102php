<?php

$arr = ["zhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
// 对数组排序
// echo '<pre>';print_r($arr);echo '<pre>';
// sort($arr);
// echo '<pre>';
// print_r($arr);
// echo '</pre>';

//打乱数组
// $myarray = array("Google" => array("Name" => "Google", "URL" => "www.google.com",
//  "Usage" => "Googling"),
//  "Yahoo" => array("Name" => "Yahoo",
//  "URL" => "www.yahoo.com",
//  "Usage" => "Yahooing?"),
//  "Ask" => array("Name" => "Ask",
//  "URL" => "www.ask.com", 
//  "Usage" => "Asking Jeeves"));
// shuffle($myarray);
// echo '<pre>';
// print_r($myarray);
// echo '</pre>'

// in_array  判断元素是否存在于数组中
// $arr = ["zhangsan","lisi","Baby","Mike","Abc","John","Jack","Zhaoliu"];

// $name = "zhangsan";

// if( in_array($name,$arr) ){
//     echo "$name 存在";
// }else{
//     echo " $name 不存在";
// }

//array_reverse  倒序数组
//  $input = ["zhangsan","lisi","Baby","Mike","Abc","John","Jack","Zhaoliu"];

// $reversed = array_reverse($input);
// $preserved = array_reverse($input, true);

// echo '<pre>';
// print_r($input);
// print_r($reversed);
// print_r($preserved);
// echo '</pre>';


//array_rand  随机取出一个或多个key

// $arr = ["zhangsan","lisi","Baby","Mike","John","Jack","Zhaoliu"];
// echo '<pre>';print_r($arr);echo '</pre>';
// $k = array_rand($arr,2);
// echo '<pre>';print_r($k);echo '</pre>';

// echo $arr[$k[0]];echo '</br>';
// echo $arr[$k[1]];echo '</br>';
// echo $arr[$k[2]];
// die;
// echo '<pre>';print_r($arr);echo '</pre>';
// $u = array_rand($arr);      //随机一个key
// echo "随机的key是： ". $k;echo '</br>';
// echo $arr[$u];

//array_merge() 合并数组
// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $result = array_merge($array1, $array2);
// echo '<pre>';
// print_r($result);
// echo '</pre>';

//array_column() 取出多维数组中的某一列

// $arr = array(
//     array(
//         'id' => 2135,
//         'first_name' => 'John',
//         'last_name' => 'Doe',
//     ),
//     array(
//         'id' => 3245,
//         'first_name' => 'Sally',
//         'last_name' => 'Smith',
//     ),
//     array(
//         'id' => 5342,
//         'first_name' => 'Jane',
//         'last_name' => 'Jones',
//     ),
//     array(
//         'id' => 5623,
//         'first_name' => 'Peter',
//         'last_name' => 'Doe',
//     )
// );
 
// $first_names = array_column($arr, 'first_name');
// echo '<pre>';
// print_r($first_names);
// echo '</pre>';

//array_values()	返回数组中的值
// $array = array("size" => "XL",
//                "color" => "gold"
//             );
// echo '<pre>';
// print_r(array_values($array));
// echo '</pre>';

//implode	将数组通过制定字符连接 （返回字符串）
$array = array('lastname', 'hello', 'phone');
$comma = implode(",", $array);

echo $comma;
echo '<pre>';
var_dump(implode('emali', array())); 
echo '</pre>';
?>