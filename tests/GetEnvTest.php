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

namespace CoiSA\Dotenv\Tests;

use CoiSA\Dotenv\Exception\NotFoundException;
use CoiSA\Dotenv\GetEnv;
use PHPUnit\Framework\TestCase;

/**
 * @covers \CoiSA\Dotenv\GetEnv
 *
 * @internal
 */
final class GetEnvTest extends TestCase
{
    private GetEnv $getEnv;

    protected function setUp(): void
    {
        parent::setUp();
        $this->getEnv = new GetEnv();
    }

    public function testHasReturnsTrueIfEnvironmentVariableExists(): void
    {
        $key = 'TEST_ENV_VAR';
        putenv("{$key}=value");

        $result = $this->getEnv->has($key);

        self::assertTrue($result);

        putenv($key); // Cleanup
    }

    public function testHasReturnsFalseIfEnvironmentVariableDoesNotExist(): void
    {
        $key = 'NON_EXISTENT_ENV_VAR';

        $result = $this->getEnv->has($key);

        self::assertFalse($result);
    }

    public function testGetReturnsValueOfExistingEnvironmentVariable(): void
    {
        $key   = 'TEST_ENV_VAR';
        $value = 'test_value';
        putenv("{$key}={$value}");

        $result = $this->getEnv->get($key);

        self::assertSame($value, $result);

        putenv($key); // Cleanup
    }

    public function testGetThrowsNotFoundExceptionIfEnvironmentVariableDoesNotExist(): void
    {
        $this->expectException(NotFoundException::class);

        $key = 'NON_EXISTENT_ENV_VAR';
        $this->getEnv->get($key);
    }
}
