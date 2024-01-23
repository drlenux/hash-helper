<?php

namespace Drlenux\HashHelper\hash;

use Drlenux\HashHelper\HashMixedInterface;
use Drlenux\HashHelper\HashResponseInterface;
use Drlenux\HashHelper\response\HashHelperResponse;

class MixedHashHelper implements HashMixedInterface
{
	use SerializerTrait;

	public function run(mixed $data): HashResponseInterface
	{
		return new HashHelperResponse(md5($this->getSerializer()->serialize($data, 'json')));
	}
}