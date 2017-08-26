<?php 
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

if (class_exists('Memcache')) {
	//echo 111;
    $meminstance = new Memcache();
} else {
	//echo 2222;
    $meminstance = new Memcached();
}

$meminstance->addServer("magento2.local", 11211);
$meminstance->set("foo", "Hello!"); 
$meminstance->set("bar", "Memcached..."); 
$arr = array( 
    $meminstance->get("foo"), 
    $meminstance->get("bar") 
); 
var_dump($arr);