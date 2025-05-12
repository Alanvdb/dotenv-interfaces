<?php

namespace AlanVdb\Server\Exception;

use AlanVdb\Server\Definition\DotEnvExceptionInterface;
use InvalidArgumentException;

class InvalidRootDirectoryProvided
	extends InvalidArgumentException
	implements DotEnvExceptionInterface
{}
