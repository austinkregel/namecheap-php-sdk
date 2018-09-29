<?php
/**
 * Use strict types for this test for seeing how modify functions and if we get the proper types back.
 */
declare(strict_types=1);

namespace Kregel\Namecheap\Tests;

use Carbon\Carbon;
use Kregel\Namecheap\Entities\Contact;
use Kregel\Namecheap\Entities\DNSRecord;
use Kregel\Namecheap\Entities\Domain;
use Kregel\Namecheap\Entities\Host;
use Kregel\Namecheap\Entities\TLD;
use Kregel\Namecheap\Transformer;
use PHPUnit\Framework\TestCase;

/**
 * Class TransformerTest
 * @package Kregel\Namecheap\Tests
 */
class TransformerTest extends TestCase
{
    /**
     * @dataProvider modifyProvider
     */
    public function testModify($class, $data)
    {
        $transformer = new Transformer;

        $modifedClass = $transformer->modify($class, $data);

        $this->assertInstanceOf($class, $modifedClass);
        // We shouldn't be converting the attributes... So it should be null.
        $this->assertEquals('value', $modifedClass->key);
        $this->assertEquals(311.318, $modifedClass->key1);
        $this->assertEquals(3134, $modifedClass->key2);
        $this->assertEquals(false, $modifedClass->key3);
        $this->assertEquals(true, $modifedClass->key4);
        $this->assertInstanceOf(Carbon::class, $modifedClass->key5);
        $this->assertSame([], $modifedClass->key6);
    }

    public function modifyProvider(): array
    {
        return [
            [
                Domain::class,
                [
                    '@attributes' => 'some thing',
                    'KEY' => 'value',
                    'KEY1' => '311.3180',
                    'KEY2' => '3134',
                    'KEY3' => 'false',
                    'KEY4' => 'true',
                    'KEY5' => '10/20/1995',
                    'KEY6' => [],
                ]
            ],
            [
                Host::class,
                [
                    '@attributes' => 'some thing',
                    'KEY' => 'value',
                    'KEY1' => '311.3180',
                    'KEY2' => '3134',
                    'KEY3' => 'false',
                    'KEY4' => 'true',
                    'KEY5' => '10/20/1995',
                    'KEY6' => [],
                ]
            ],
        ];
    }
}
