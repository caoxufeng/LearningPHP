<?php

function load1($className)
{
	echo 1;
	if(is_file($className . '.php')) {
		require $className .'.php';

	}
}

function load2($className)
{
	echo 2;
	if(is_file('./lib/' . $className . '.php')) {
		require './lib/' . $className .'.php';

	}
}



spl_autoload_register('load1');
spl_autoload_register('load2');



new DB();
new Info();

