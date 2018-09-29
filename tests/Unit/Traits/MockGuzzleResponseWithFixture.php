<?php
/**
 * MockGuzzleResponseWithFixture
 */
declare(strict_types=1);

namespace Kregel\Namecheap\Tests\Unit\Traits;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;

/**
 * Trait MockGuzzleResponseWithFixture
 * @package Kregel\Namecheap\Tests\Unit\Traits
 */
trait MockGuzzleResponseWithFixture
{
    public function mockResponseFromFixture($relativePath): Response
    {
        $stream = new Stream(fopen(__DIR__ . '/' . $relativePath, 'r'));

        return new Response(200, [], $stream);
    }
}