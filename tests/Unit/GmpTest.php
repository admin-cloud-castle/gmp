<?php

declare(strict_types=1);

namespace CloudCastle\Gmp\Tests\Unit;

use CloudCastle\Gmp\Exception\GmpException;
use CloudCastle\Gmp\Gmp;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * Модульные тесты заглушки Gmp.
 */
#[CoversClass(Gmp::class)]
final class GmpTest extends TestCase
{
    /**
     * Проверяет, что name() возвращает composer-имя пакета.
     */
    public function testNameReturnsComposerPackageName(): void
    {
        $package = new Gmp();

        self::assertSame('cloud-castle/gmp', $package->name());
    }

    /**
     * Проверяет, что abort() бросает GmpException.
     */
    public function testAbortThrowsGmpException(): void
    {
        $package = new Gmp();

        $this->expectException(GmpException::class);
        $this->expectExceptionMessage('тест');

        $package->abort('тест');
    }
}
