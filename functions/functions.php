<?php

namespace Shlinkio\Shlink\Json;

use JsonSerializable;

use function json_decode as spl_json_decode;
use function json_encode as spl_json_encode;

use const JSON_THROW_ON_ERROR;

function json_decode(string $json): array
{
    return spl_json_decode($json, true, 512, JSON_THROW_ON_ERROR);
}

function json_encode(array|JsonSerializable $payload): string
{
    return spl_json_encode($payload, JSON_THROW_ON_ERROR);
}
