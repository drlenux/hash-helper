<?php

namespace Drlenux\HashHelper\response;

use Drlenux\HashHelper\HashResponseInterface;

class HashHelperResponse implements HashResponseInterface
{
	public function __construct(
		private string $hash
	)
	{
	}

	public function toString(): string
	{
		return $this->hash;
	}

	public function toInt(): int
	{
		$hash = hash('sha256', $this->hash, true);
		$parts = str_split($hash, 4);
		$folded = 0;

		foreach ($parts as $part) {
			$partInt = unpack('L', $part)[1];

			$folded ^= $partInt;
			$folded = ($folded << 1) | ($folded >> (PHP_INT_SIZE * 8 - 1));
		}

		return $folded & PHP_INT_MAX;
	}
}