<?php

declare(strict_types=1);

namespace CloudCastle\Gmp;

use CloudCastle\Gmp\Contract\GmpInterface;
use CloudCastle\Gmp\Exception\GmpException;

/**
 * Точка входа пакета Gmp.
 *
 * Заглушка скаффолда: замените на реальный публичный API.
 */
final class Gmp implements GmpInterface
{
    /**
     * Версия пакета для диагностики.
     */
    public const VERSION = '0.1.0';

    /**
     * Возвращает идентификатор пакета Composer.
     */
    #[\Override]
    public function name(): string
    {
        return 'cloud-castle/gmp';
    }

    /**
     * Завершает работу с ошибкой пакета.
     *
     * @throws GmpException
     */
    public function abort(string $message): never
    {
        throw new GmpException($message);
    }
}
