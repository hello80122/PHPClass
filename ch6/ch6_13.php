<?php
//九九乘法表
for ($i = 2; $i < 10; $i++){
  for ($j = 1; $j < 10; $j++){
    printf("%d*%d=%d \t",$i,$j,($i * $j));
  }
  printf("\n");
} 
?>