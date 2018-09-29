<?php
/**
 * Nameservers
 */
declare(strict_types=1);

namespace Kregel\Namecheap\Interactions;

use Kregel\Namecheap\Contracts\NameserversContract;
use Kregel\Namecheap\Traits\InteractsWithApi;

/**
 * Class Nameservers
 * @package Kregel\Namecheap\Interactions
 */
class Nameservers extends AbstractIntration implements NameserversContract
{
    use InteractsWithApi;

    /**
     * @return NameserversContract
     */
    public function create(): NameserversContract
    {
        $this->request('get', 'domains.ns.create', []);

        return $this;
    }

    /**
     * @return NameserversContract
     */
    public function delete(): NameserversContract
    {
        $this->request('get', 'domains.ns.delete', []);

        return $this;
    }

    /**
     * @return array
     */
    public function getInfo(): array
    {
        return $this->request('get', 'domains.ns.getInfo', []);
    }

    /**
     * @return NameserversContract
     */
    public function update(): NameserversContract
    {
        $this->request('get', 'domains.ns.update', []);

        return $this;
    }
}
