<?php
include "Dog.php";

class Poodle extends Dog{
  protected $size;

  public function __construct($name,$color,$style,$size){
    parent::__construct($name,$color,$style);
    $this->size = $size;
  }
  // 覆寫狗叫的 function
  public function dogBark(){
    echo "狗叫...但小聲....";
    //呼叫父類別的 dogBark()
    parent::dogBark();
  }
}
?>