<?php
include("about_Cookie.php");

if(!isset($_COOKIE['user']))
{
    echo "Cookie Name ". $cookie_name ."is not set";
}
else{
    echo "Cookie Name is:".$cookie_name ."is set";
    echo "Value is:".$_COOKIE[$cookie_name];
}