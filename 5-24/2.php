<?php
//$array = array(
//    1    => "a",
//    "1"  => "b",
//    1.5  => "c",
//    true => "d",
//);

//$array = array("foo", "bar", "hallo", "world");

//$array = array(
//    "a",
//    "b",
//    6 => "c",
//    "d",
//);
//var_dump($array);


$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

