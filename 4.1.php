<?php
function foo(array $foo){
 print_r($foo);
}

foo(array(1,2,3));  //正确
foo(1,2,3); //错误
