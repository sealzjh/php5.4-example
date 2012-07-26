<?php
function convert($size) {
  $unit = array('b','kb','mb','gb','tb','pb');
return round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

$start = memory_get_usage(true);
$test = array();
for($i=0;$i<100000;$i++) {
    $test[md5($i)] = 1;
}
echo convert(memory_get_usage(true)-$start);
