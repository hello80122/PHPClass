<?php
class Shape {
    const PI = 3.142;
    function __call($name,$arg){
        if($name == 'area')
        switch(count($arg))
        {
            case 0 : return 0;
            case 1 : return self::PI * $arg[0];
            case 2 : return $arg[0] * $arg[1];
        }
    }
    function __callStatic($name,$arg){
        return array(3,5);
    }
}

$circle = new Shape();
echo $circle -> area(3)."<br>";
$rect = new Shape();
echo $rect -> area(8,6)."<br>";
echo Shape::hello()[1];
?>
