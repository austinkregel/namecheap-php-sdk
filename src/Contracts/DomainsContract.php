<?php

namespace Kregel\Namecheap\Contracts;

use Kregel\Namecheap\Interactions\DNS;
use Kregel\Namecheap\Interactions\Nameservers;

/**
 * Interface DomainsContract
 * @package Kregel\Namecheap\Contracts
 */
interface DomainsContract
{
    /**
     * @return array
     */
    public function getList(): array;

    /**
     * @return array
     */
    public function check(): array;

    /**
     * @return array
     */
    public function renew(): array;

    /**
     * @return Nameservers
     */
    public function ns(): Nameservers;
}