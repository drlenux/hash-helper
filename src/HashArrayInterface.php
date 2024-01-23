<?php

namespace Drlenux\HashHelper;

interface HashArrayInterface
{
	public function run(array $data): ?HashResponseInterface;
}
