<?php
spl_autoload_register(function($className) {
    // Handling namespaces separator
	$file =  "classes/" . str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";
	include_once $file;
});