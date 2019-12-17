<?php
  // 引入 dog 類別
  include "Dog.php";
  // 定義牧羊犬 Shepherd 是 狗 dog 的子類別
  class Shepherd extends Dog{
     // 定義子類別需要的屬性
     protected $age;

     public function __construct($name,$color,$style,$age){
       // 繼承父類別的屬性
       parent::__construct($name,$color,$style);
       $this->name = $name;
       $this->color = $color;
       $this->style = $style;
       $this->age = $age;
      }
      public function getAge(){
          return $this->age;
      }
     // 定義子類別的方法 
     public function doWork(){
       echo "趕羊..."."<br />";
     }
     // 覆寫(override)解構子
     public function __destruct(){
       echo "趕羊到家了";
     }
   }
?>