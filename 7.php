<?php
class Test {
  public function do_method(){
    echo "do method\n";
  }
}

$act = 'do_method';

Test::{$act}();
$obj = new Test();
$obj->{$act}();

