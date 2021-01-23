<?php

declare(strict_types=1);

namespace Tests\Llissssss\Puri;

use Llissssss\Puri\Url;
use PHPUnit\Framework\TestCase;

class UrlTest extends TestCase
{
    /**
     * @dataProvider validUrls
     */
    public function testItInstantiatesOnValidUrl(string $url): void
    {
        $instance = new Url($url);
        self::assertInstanceOf(Url::class, $instance);
    }

    /**
     * @dataProvider invalidUrls
     */
    public function testInvalidUrlsThrowException(string $url): void
    {
        $this->expectException(\InvalidArgumentException::class);
        new Url($url);
    }

    public function validUrls()
    {
        return [
            ['http://albertcasadessus.com'],
            ['https://albertcasadessus.co.uk'],
            ['https://www.albertcasadessus.co.uk'],
            ['https://albertcasadessus.cat'],
            ['https://www.albertcasadessus.cat'],
            ['https://me:pass@www.albertcasadessus.cat'],
            ['https://www.albertcasadessus.cat:84'],
            ['https://www.albertcasadessus.cat:9000'],
            ['file:///path/to/README.md'],
            ['http://xn--oy2b35ckwhba574atvuzkc.com'],
        ];
    }

    public function invalidUrls()
    {
        return [
            ['albertcasadessus.com'],
            ['urn:isbn:89798'],
            ['http://스타벅스코리아.com'],
        ];
    }
}