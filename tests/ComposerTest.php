<?php

declare(strict_types=1);

namespace KrepyshSpec\ComposerLibrarySkeleton\Tests;

use KrepyshSpec\ComposerLibrarySkeleton\Bootstrap;
use PHPUnit\Framework\TestCase;

class ComposerTest extends TestCase
{
    public function testBootstrap(): void
    {
        $this->assertStringContainsString((new Bootstrap())->run(), "Hello from composer library skeleton");
    }
}
