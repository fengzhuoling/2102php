<?php 

$count=0;
  if(file_exists("count.txt"))  
  {
    $count=file_get_contents("count.txt");  
  }
  $count++;
  echo "访问量：".$count;
  file_put_contents("count.txt",$count);  
 ?>