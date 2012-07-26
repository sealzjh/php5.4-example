<?php
class User {
public function __construct(){
echo "This is __construct function call\n";
}
public function addUser(){
echo "This is addUser function call\n";
}
}
$u = new User();
$u->addUser();
$u = new ReflectionClass('User');
$func = $u->newInstanceWithoutConstructor();
$func->addUser();

