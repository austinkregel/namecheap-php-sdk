<?php

namespace Kregel\Namecheap\Contracts;

/**
 * Interface Arrayable
 * @package Kregel\Namecheap\Contracts
 */
interface Arrayable
{
    /**
     * @return array
     */
    public function toArray(): array;
}
