<?php 
class user {
    public static function instance(){
        static $inst = null;
        if($inst === null){
            $inst = new user();
        }
        return $inst;
    }

    private function __construct(){
        
    }
}

$obj = user::instance();
$obj2 = user::instance();

$obj3 = new user(); //throws error because of the private constructor. by default when instantaiting an instance of the class the constructor is invoked 