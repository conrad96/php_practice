<?php 
class A {
    public static function who(){
        echo __CLASS__;
    }

    public static function show(){
        //self::who(); //when invoked it will display this class' props
        static::who(); //late bindings to show current class calling function
    }
}

class B extends A {
    public static function who(){
        echo __CLASS__;
    }
}

B::show();
