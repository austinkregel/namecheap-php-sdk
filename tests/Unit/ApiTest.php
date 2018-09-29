<?php

namespace Kregel\Namecheap\Tests;

use GuzzleHttp\Client;
use Kregel\Namecheap\Api;
use Kregel\Namecheap\Config;
use Kregel\Namecheap\Interactions\Domains;
use Kregel\Namecheap\Interactions\Users;
use PHPUnit\Framework\TestCase;
use Mockery;

/**
 * Class ApiTest
 * @package Kregel\Namecheap\Tests
 */
class ApiTest extends TestCase
{
    /**
     * @var Api
     */
    protected $api;

    public function setUp()
    {
        parent::setUp();
        /** @var Config|Mockery\MockInterface $mockConfig */
        $mockConfig = Mockery::mock(Config::class);
        $mockClient = Mockery::mock(Client::class);
        $this->api = new Api($mockConfig, $mockClient);
    }

    public function testDomains()
    {
        $domains = $this->api->domains();

        $this->assertInstanceOf(Domains::class, $domains);
    }
}
