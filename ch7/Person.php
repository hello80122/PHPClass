<?php
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
?>