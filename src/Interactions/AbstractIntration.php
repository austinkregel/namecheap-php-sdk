<?php

namespace Kregel\Namecheap\Interactions;

use GuzzleHttp\ClientInterface;
use Kregel\Namecheap\Config;
use Kregel\Namecheap\Traits\InteractsWithApi;

/**
 * Class AbstractIntration
 * @package Kregel\Namecheap\Interactions
 */
class AbstractIntration
{
    use InteractsWithApi;

    /**
     * @var Config
     */
    protected $config;

    /**
     * AbstractIntration constructor.
     * @param Config $config
     * @param ClientInterface $client
     */
    public function __construct(Config $config, ClientInterface $client)
    {
        $this->config = $config;
        $this->_client = $client;
    }
}
