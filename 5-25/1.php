<?php
//$array = array(
//    "foo" => "bar",
//    "bar" => "foo",
//    100   => -100,
//    -100  => 100,
//);
//var_dump($array);


//$array = array(
//    "foo" => "bar",
//    42    => 24,
//    "multi" => array(
//        "dimensional" => array(
//            "array" => "foo"
//        )
//    )
//);
//
//var_dump($array["foo"]);
//var_dump($array[42]);
//var_dump($array["multi"]["dimensional"]["array"]);


// 创建一个简单的数组
$array = array(1, 2, 3, 4, 5);
print_r($array);

// 现在删除其中的所有元素，但保持数组本身不变:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// 添加一个单元
$array[] = 6;
print_r($array);

// 重新索引：
$array = array_values($array);
$array[] = 7;
print_r($array);