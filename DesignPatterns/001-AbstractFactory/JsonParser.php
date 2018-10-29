<?php

namespace AbstractFactory;

require "Parser.php";

class JsonParser implements Parser
{
	public function parse(string $input):array
	{
		return json_decode($input,true);
	}
}
