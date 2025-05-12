<?php declare(strict_types=1);

namespace AlanVdb\Server\Definition;

interface DotEnvParserFactoryInterface
{
	public function create(string $root) : DotEnvParserInterface;
}