<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表格</title>
</head>
<body>

<?php
    $list = [
    ["name"=>"zhangsan","age"=>11,"email"=>"zhangsan@qq.com"],
    ["name"=>"lisi","age"=>22,"email"=>"lisi@qq.com"],
    ["name"=>"wangwu","age"=>33,"email"=>"wangwu@qq.com"],
    ["name"=>"zhaoliu","age"=>44,"email"=>"zhaoliu@qq.com"],
];

?>

    <ul>
        <?php
            foreach($list as $k=>$v){
               echo "姓名:".$v['name'];
               echo "| 年龄:".$v['age'];
               echo " |email:".$v['email'];echo "</br>";;
            }
        ?>
    </ul>
</body>
</html>

