<?php
namespace AutoLoading;

class loading
{
	public static function autoload($className)
	{
		$fileName = str_replace('\\',DIRECTORY_SEPARATOR,DIR . '\\' . $className) . '.php';
		if(is_file($fileName))
		{
			require $fileName;
		}else
		{
			echo $fileName . ' is not exist'; die;
		}
		
	}
}


