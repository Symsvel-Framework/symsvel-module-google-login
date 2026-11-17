<?php

declare(strict_types=1);

namespace SymSvel\Module\GoogleLogin\Tests\Unit;

use PHPUnit\Framework\TestCase;
use SymSvel\Module\GoogleLogin\GoogleLoginBundle;

final class GoogleLoginBundleTest extends TestCase
{
    public function testBundleCanBeInstantiated(): void
    {
        self::assertInstanceOf(GoogleLoginBundle::class, new GoogleLoginBundle());
    }
}
