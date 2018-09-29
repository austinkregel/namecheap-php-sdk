<?php

namespace Kregel\Namecheap\Interactions;

use Kregel\Namecheap\Contracts\DomainsContract;
use Kregel\Namecheap\Entities\Contact;
use Kregel\Namecheap\Entities\Domain;
use Kregel\Namecheap\Transformer;

/**
 * Class Domains
 * @package Kregel\Namecheap
 */
class Domains extends AbstractIntration implements DomainsContract
{
    public function getList(): array
    {
        return $this->request('get', 'domains.getList', [], function (array $response) {
            // Check if we have errors first
            if (!empty($response['Errors'])) {
                return $response['Errors'];
            }

            $domains = $response['CommandResponse']['DomainGetListResult']['Domain'];

            $dataToLoopThrough = array_map(function ($bits) {
                return $bits['@attributes'];
            }, $domains);

            return array_map(function ($domain) {
                return (new Transformer)->modify(Domain::class, $domain);
            }, $dataToLoopThrough);
        });
    }

    /**
     * @return array
     */
    public function check(): array
    {
        return $this->request('get', 'domains.check', [], function ($response) {
            return $response;
        });
    }

    /**
     * @return array
     */
    public function renew(): array
    {
        return $this->request('get', 'domains.renew', [], function ($response) {
            return $response;
        });
    }

    /**
     * @return Nameservers
     */
    public function ns(): Nameservers
    {
        return new Nameservers($this->config, $this->_client);
    }
}
