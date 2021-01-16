<?php

declare(strict_types=1);

namespace Tests\Llissssss\Puri;

use Llissssss\Puri\Uri;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testMyTest(): void
    {
        $instance = new Uri();
        self::assertInstanceOf(Uri::class, $instance);
    }
}