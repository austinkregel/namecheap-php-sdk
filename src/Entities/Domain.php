<?php

namespace Kregel\Namecheap\Entities;

use Carbon\Carbon;
use Kregel\Namecheap\Contracts\Entity;

/**
 * Class Domain
 * @package Namecheap\Entities
 * @property int $id
 * @property string $name
 * @property string $user
 * @property Carbon $created
 * @property Carbon $expires
 * @property bool $isexpired
 * @property bool $islocked
 * @property bool $autorenew
 * @property string $whoisguard
 * @property bool $ispremium
 * @property bool $isourdns
 */
class Domain implements Entity
{

}
