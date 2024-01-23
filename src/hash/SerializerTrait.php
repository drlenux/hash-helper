<?php

namespace Drlenux\HashHelper\hash;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

trait SerializerTrait
{
	protected function getSerializer(): Serializer
	{
		$encoders = [new JsonEncoder()];
		$normalizers = [new ObjectNormalizer()];
		return new Serializer($normalizers, $encoders);
	}
}