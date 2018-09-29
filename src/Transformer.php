<?php
/**
 * Transformer
 */
declare(strict_types=1);

namespace Kregel\Namecheap;

use Carbon\Carbon;
use Kregel\Namecheap\Contracts\Entity;

/**
 * Class Transformer
 * @package Kregel\Namecheap
 */
class Transformer
{
    public function modify(string $class, array $data): Entity
    {
        $classInstance = new $class;
        foreach ($data as $key => $value) {
            if ($key === '@attributes') {
                continue;
            }

            $classInstance->{strtolower($key)} = $this->convertStringToPrimitive($value);
        }

        return $classInstance;
    }

    public function convertStringToPrimitive($string)
    {
        if (is_array($string)){
            return $string;
        } elseif (is_numeric($string)) {
            return floatval($string);
        } elseif ($string === 'false' || $string === 'true') {
            return $string === 'true' ? true : false;
        } elseif (strpos($string, '/') !== false) {
            return Carbon::parse($string);
        }

        return $string;
    }
}
