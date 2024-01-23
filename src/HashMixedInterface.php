<?php

namespace Drlenux\HashHelper;

interface HashMixedInterface
{
	public function run(mixed $data): HashResponseInterface;
}
