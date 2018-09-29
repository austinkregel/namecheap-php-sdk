<?php

namespace Kregel\Namecheap\Contracts;

/**
 * Interface NameserversContract
 * @package Kregel\Namecheap\Contracts
 */
interface NameserversContract
{
    /**
     * @return NameserversContract
     */
    public function create(): NameserversContract;

    /**
     * @return NameserversContract
     */
    public function delete(): NameserversContract;

    /**
     * @return array
     */
    public function getInfo(): array;

    /**
     * @return NameserversContract
     */
    public function update(): NameserversContract;
}