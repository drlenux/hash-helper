<?php

namespace Drlenux\HashHelper\hash;

use Drlenux\HashHelper\HashObjectInterface;
use Drlenux\HashHelper\HashResponseInterface;
use Drlenux\HashHelper\response\HashHelperResponse;

class ObjectHashHelper implements HashObjectInterface
{
	use SerializerTrait;

	public function run(object $data): ?HashResponseInterface
	{
		return new HashHelperResponse(md5($this->getSerializer()->serialize($data, 'json')));
	}
}