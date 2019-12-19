<?php
<<<<<<< HEAD
  class Person {
      private $sex;
      public function __set($name, $value){
        
        //限制不可動態產生屬性
        if (isset($this->$name)) {
            return $this->$name = $value;
        } else {
            return null;
        }
      }
      // 取得屬性名稱的值
      public function __get($name){
        return $name;
      }
      // 判斷是否有該屬性參數   
      public function __isset($name){
        return $name;
      }
      // 取消該屬性
      public function __unset($name){
        return $name;
      }
    }
    
    $person = new Person();
    //Person 類別沒有 name 這個屬性名稱
    //PHP_EOL 空隔或是換行
    $person->name = 'PHP';
    echo $person->name.PHP_EOL;
    // sex 這個屬性是無法取得的
    echo $person->sex.PHP_EOL;
    echo isset($person->address);
    unset($person->name);
=======
class Person {
    private $sex;
    public function __set($name,$value){

        if(isset($this->$name)) {
            return $this->name = $value;
        }
        else{
            return null;
        }
    }
    public function __get($name){
        return $name;
    }
    public function __isset($name){
        return $name;
    }
    public function __unset($name){
        return $name;
    
$person = new Person();
$person->name = 'PHP';
echo $person -> name.PHP_EOL;
echo $person -> sex.PHP_EOL;
echo isset($person -> address);
unset($person->name);
    }
}
>>>>>>> eab61a9901cf9d2c0eb16f393a074b301427692f
?>