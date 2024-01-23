<?php

namespace Drlenux\HashHelper;

interface HashObjectInterface
{
	public function run(object $data): ?HashResponseInterface;
}
