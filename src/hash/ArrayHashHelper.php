<?php

namespace Drlenux\HashHelper\hash;

use Drlenux\HashHelper\HashArrayInterface;
use Drlenux\HashHelper\HashResponseInterface;
use Drlenux\HashHelper\response\HashHelperResponse;

class ArrayHashHelper implements HashArrayInterface
{
	use SerializerTrait;

	public function run(array $data): ?HashResponseInterface
	{
		return new HashHelperResponse(md5($this->getSerializer()->serialize($data, 'json')));
	}
}