<?php

namespace Kregel\Namecheap;

use Kregel\Namecheap\Contracts\Arrayable;

/**
 * Class Config
 * @package Kregel\Namecheap
 */
class Config implements Arrayable
{
    /**
     * @var string
     */
    protected $apiUser;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $clientIp;

    /**
     * Config constructor.
     * @param string|null $apiUser
     * @param string|null $apiKey
     * @param string|null $username
     * @param string|null $clientIp
     */
    public function __construct($apiUser = null, $apiKey = null, $username = null, $clientIp = null)
    {
        $this->apiKey = $apiKey;
        $this->apiUser = $apiUser;
        $this->username = $username;
        $this->clientIp = $clientIp;
    }

    /**
     * @return string
     */
    public function getApiUser(): ?string
    {
        return $this->apiUser;
    }

    /**
     * @param string $apiUser
     * @return Config
     */
    public function setApiUser($apiUser): Config
    {
        $this->apiUser = $apiUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return Config
     */
    public function setApiKey($apiKey): Config
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Config
     */
    public function setUsername($username): Config
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientIp(): ?string
    {
        return $this->clientIp;
    }

    /**
     * @param string $clientIp
     * @return Config
     */
    public function setClientIp($clientIp): Config
    {
        $this->clientIp = $clientIp;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'ApiKey' => $this->apiKey,
            'APIUser' => $this->apiUser,
            'UserName' => $this->username,
            'ClientIp' => $this->clientIp
        ];
    }
}
