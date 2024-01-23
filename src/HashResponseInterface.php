<?php

namespace Drlenux\HashHelper;

interface HashResponseInterface
{
	public function toString(): string;

	public function toInt(): int;
}