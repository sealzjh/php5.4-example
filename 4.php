<?php
function foo(callable $cb) {
 $cb('');
}

//foo("false"); 
foo("printf"); //okey
foo(function(){}); //okey
 
class A {
    static function show() {
    }
}

foo(array("A", "show")); //okey

