<?php

namespace AbstractFactory;

require "JsonParser.php";
require "AbstractFactory.php";


class AbstractFactoryTest
{
	public function test()
	{

		$factory = new ParserFactory();
		$parser= $factory->createJsonParser();
	}
}

