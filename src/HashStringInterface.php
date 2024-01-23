<?php

namespace Drlenux\HashHelper;

interface HashStringInterface
{
	public function run(string $data): HashResponseInterface;
}
