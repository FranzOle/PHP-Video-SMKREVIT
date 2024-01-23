<?php 

$cookie_name = "polisi";
$cookie_value = "ferdi sambo";
setcookie($cookie_name, $cookie_value);

$cookie_value = "yosua";
setcookie($cookie_name, $cookie_value);

echo $_COOKIE[$cookie_name];

echo '<br>';

setcookie("user", "hour", time() + 3600);
var_dump($_COOKIE['user']);
?>