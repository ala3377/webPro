<?php
$user_Cookie="ala";

$pass_Cookie="pass";

setcookie($user_Cookie,"ala", time() + (86400 * 30), "/"); // 86400 = 1 day

setcookie($pass_Cookie,"ala1234", time() + (86400 * 30), "/"); // 86400 = 1 day
