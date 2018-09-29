<?php

namespace Kregel\Namecheap;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Kregel\Namecheap\Interactions\Domains;
use Kregel\Namecheap\Interactions\Users;

/**
 * Class Api
 * @package Kregel\Namecheap
 */
class Api
{
    /**
     * @const string
     */
    public const ENV_SANDBOX = 'https://api.sandbox.namecheap.com/';

    /**
     * @const string
     */
    public const ENV_PRODUCTION = 'https://api.namecheap.com/';

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * Api constructor.
     * @param Config $config
     * @param ClientInterface $client
     */
    public function __construct(Config $config, ClientInterface $client)
    {
        $this->config = $config;
        $this->client = $client;
    }

    /**
     * @return Domains
     */
    public function domains(): Domains
    {
        return new Domains($this->config, $this->client);
    }
 }
