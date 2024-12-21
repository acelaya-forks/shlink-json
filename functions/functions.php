<?php

declare(strict_types=1);

namespace Shlinkio\Shlink\Json;

use JsonException;
use JsonSerializable;

use function json_decode as spl_json_decode;
use function json_encode as spl_json_encode;

use const JSON_THROW_ON_ERROR;

/**
 * @return array<string|int, mixed>
 * @throws JsonException
 */
function json_decode(string $json): array
{
    return spl_json_decode($json, true, 512, JSON_THROW_ON_ERROR);
}

/**
 * @param array<string|int, mixed>|JsonSerializable $payload
 * @throws JsonException
 */
function json_encode(array|JsonSerializable $payload): string
{
    return spl_json_encode($payload, JSON_THROW_ON_ERROR);
}
