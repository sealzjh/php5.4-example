
<?php
class Thing {
    static function DoesStuff($name) {
        echo 'Hello '.$name;
    }
}

$f = array('Thing', 'DoesStuff');

$f('htc');

