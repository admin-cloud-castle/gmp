<?php

declare(strict_types=1);

namespace CloudCastle\Gmp\Contract;

/**
 * Контракт публичного API пакета Gmp.
 */
interface GmpInterface
{
    /**
     * Возвращает идентификатор пакета Composer.
     */
    public function name(): string;
}
