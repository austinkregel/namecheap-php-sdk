<?php

namespace Kregel\Namecheap\Tests;

use PHPUnit\Framework\TestCase;
use Kregel\Namecheap\Config;

/**
 * Class ConfigTest
 * @package Kregel\Namecheap\Tests
 */
class ConfigTest extends TestCase
{
    public function testConfigConstructor()
    {
        $config = new Config('apiuser', 'apikey', 'username', 'clientip');

        $this->assertEquals('apiuser', $config->getApiUser());
        $this->assertEquals('apikey', $config->getApiKey());
        $this->assertEquals('username', $config->getUsername());
        $this->assertEquals('clientip', $config->getClientIp());
        $this->assertArraySubset([
            'ApiKey' => 'apikey',
            'APIUser' => 'apiuser',
            'UserName' => 'username',
            'ClientIp' => 'clientip',
        ], $config->toArray());
    }

    public function testConfigSetApiUser()
    {
        $config = new Config;

        $config->setApiUser('apiuser-test');

        $this->assertEquals('apiuser-test', $config->getApiUser());
        $this->assertNull($config->getApiKey());
        $this->assertNull($config->getUsername());
        $this->assertNull($config->getClientIp());
        $this->assertArraySubset([
            'ApiKey' => null,
            'APIUser' => 'apiuser-test',
            'UserName' => null,
            'ClientIp' => null,
        ], $config->toArray());

    }

    public function testConfigSetApiKey()
    {
        $config = new Config;

        $config->setApiKey('apikey-test');

        $this->assertEquals('apikey-test', $config->getApiKey());
        $this->assertNull($config->getApiUser());
        $this->assertNull($config->getUsername());
        $this->assertNull($config->getClientIp());
    }

    public function testConfigSetUsername()
    {
        $config = new Config;

        $config->setUsername('username-test');

        $this->assertEquals('username-test', $config->getUsername());
        $this->assertNull($config->getApiUser());
        $this->assertNull($config->getApiKey());
        $this->assertNull($config->getClientIp());
    }

    public function testConfigSetClientIp()
    {
        $config = new Config;

        $config->setClientIp('ip-test');

        $this->assertEquals('ip-test', $config->getClientIp());
        $this->assertNull($config->getApiUser());
        $this->assertNull($config->getApiKey());
        $this->assertNull($config->getUsername());
    }
}
