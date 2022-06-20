<?php 
// parameterised function 
// pass by value
function printName($name){
    return $name;
}

print printName('conrad');

//pass by reference
//actual value is modified inside function
function modifyVariable(&$str){
    $str .= ' modified';
}

$str = ' <p /> this is original string. ';

modifyVariable($str);

print $str;
