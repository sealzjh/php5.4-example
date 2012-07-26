<?php
class A {
private $value = 1;
function firstGetter($name) {
  return function() use ($name) { 
    return $this->$name;
  }; 
}

function secondGetter() {
$that = $this;
  return function($name) use ($that) {
    return $that->$name;};
  }
}

$a = new A();
//$firstGetter = $a->firstGetter('value');
//echo $firstGetter()."\n";
$secondGetter = $a->secondGetter();
echo $secondGetter('value');

