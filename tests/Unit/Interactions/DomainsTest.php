<?php

namespace Kregel\Namecheap\Tests\Interactions;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Kregel\Namecheap\Config;
use Kregel\Namecheap\Entities\Domain;
use Kregel\Namecheap\Interactions\Domains;
use Kregel\Namecheap\Tests\Unit\Traits\MockGuzzleResponseWithFixture;
use PHPUnit\Framework\TestCase;
use Mockery;

/**
 * Class DomainsTest
 * @package Kregel\Namecheap\Tests\Interactions
 */
class DomainsTest extends TestCase
{
    use MockGuzzleResponseWithFixture;

    /**
     * @var Domains
     */
    protected $domainInteraction;

    /**
     * @var Config|Mockery\MockInterface
     */
    protected $mockConfig;

    /**
     * @var Client|Mockery\MockInterface
     */
    protected $mockClient;

    public function setUp()
    {
        parent::setUp();
        $this->mockConfig = Mockery::mock(Config::class);
        $this->mockClient = Mockery::mock(Client::class);
        $this->domainInteraction = new Domains($this->mockConfig, $this->mockClient);
    }

    public function testGetList()
    {
        $this->mockConfig->shouldReceive('toArray')->once()->andReturn([
            'config' => 'true'
        ]);

        $response = $this->mockResponseFromFixture('../../data/domains.getList.xml');

        $this->mockClient->shouldReceive('request')
            ->once()
            ->with('get', 'xml.response?Command=namecheap.domains.getList&config=true', [])
            ->andReturn($response);

        /** @var Domain[] $domains */
        $domains = $this->domainInteraction->getList();

        $this->assertEquals(127, $domains[0]->id);
        $this->assertEquals('domain1.com', $domains[0]->name);
        $this->assertEquals('owner', $domains[0]->user);
        $this->assertInstanceOf(Carbon::class, $domains[0]->created);
        $this->assertInstanceOf(Carbon::class, $domains[0]->expires);
        $this->assertFalse($domains[0]->isexpired);
        $this->assertFalse($domains[0]->islocked);
        $this->assertFalse($domains[0]->autorenew);
        $this->assertTrue($domains[0]->ispremium);
        $this->assertTrue($domains[0]->isourdns);
        $this->assertEquals('ENABLED', $domains[0]->whoisguard);
    }
    public function testGetListHasAnError()
    {
        $this->mockConfig->shouldReceive('toArray')->once()->andReturn([
            'config' => 'true'
        ]);

        $response = $this->mockResponseFromFixture('../../data/domains.getList.error.xml');

        $this->mockClient->shouldReceive('request')
            ->once()
            ->with('get', 'xml.response?Command=namecheap.domains.getList&config=true', [])
            ->andReturn($response);

        $errors = $this->domainInteraction->getList();
        $this->assertArraySubset([
            'Error' => "API Key is invalid or API access has not been enabled"
        ], $errors);
    }
}
