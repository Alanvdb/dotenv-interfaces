<?php declare(strict_types=1);

namespace AlanVdb\Server\Definition;

interface DotEnvParserInterface
{
	/**
	 * @throws \AlanVdb\Server\Exception\CannotParseDotEnv
	 */
	public function parse() : array;
}
