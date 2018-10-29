<?php

namespace AbstractFactory;

require "JsonParser.php";


class AbstractFactory
{
	public function createJsonParser():JsonParser
	{
		return new JsonParser();
	}
}
