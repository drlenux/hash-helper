<?php

namespace Drlenux\HashHelper\hash;

use Drlenux\HashHelper\HashResponseInterface;
use Drlenux\HashHelper\HashStringInterface;
use Drlenux\HashHelper\response\HashHelperResponse;

class StringHashHelper implements HashStringInterface
{
	public function run(string $data): HashResponseInterface
	{
		return new HashHelperResponse(md5($data));
	}
}
