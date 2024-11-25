<?php

declare(strict_types=1);

/**
 * This file is part of coisa/dotenv.
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 *
 * @link      https://github.com/coisa/dotenv
 * @copyright Copyright (c) 2021-2024 Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace CoiSA\Dotenv\Tests\Exception;

use CoiSA\Dotenv\Exception\NotFoundException;
use PHPUnit\Framework\TestCase;
use Psr\Container\NotFoundExceptionInterface;

/**
 * @covers \CoiSA\Dotenv\Exception\NotFoundException
 *
 * @internal
 */
final class NotFoundExceptionTest extends TestCase
{
    public function testNotFoundExceptionIsARuntimeException(): void
    {
        $exception = new NotFoundException();

        self::assertInstanceOf(\RuntimeException::class, $exception);
    }

    public function testNotFoundExceptionImplementsNotFoundExceptionInterface(): void
    {
        $exception = new NotFoundException();

        self::assertInstanceOf(NotFoundExceptionInterface::class, $exception);
    }

    public function testNotFoundExceptionCanBeInstantiatedWithMessage(): void
    {
        $message   = 'Environment variable not found.';
        $exception = new NotFoundException($message);

        self::assertSame($message, $exception->getMessage());
    }

    public function testNotFoundExceptionCanBeInstantiatedWithMessageAndCode(): void
    {
        $message   = 'Environment variable not found.';
        $code      = 404;
        $exception = new NotFoundException($message, $code);

        self::assertSame($message, $exception->getMessage());
        self::assertSame($code, $exception->getCode());
    }

    public function testNotFoundExceptionCanBeInstantiatedWithPreviousException(): void
    {
        $previous  = new \Exception('Previous exception');
        $exception = new NotFoundException('Test exception', 0, $previous);

        self::assertSame($previous, $exception->getPrevious());
    }
}
