<?php

namespace AbstractFactory;

interface Parser
{
	public function parse(string $input):array;
}
