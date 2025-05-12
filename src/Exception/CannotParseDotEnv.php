<?php

namespace AlanVdb\Server\Exception;

use AlanVdb\Server\Definition\DotEnvExceptionInterface;
use RuntimeException;

class CannotParseDotEnv
	extends RuntimeException
	implements DotEnvExceptionInterface
{}
