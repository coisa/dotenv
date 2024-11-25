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

namespace CoiSA\Dotenv;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class AutoloadTest extends TestCase
{
    public function testAutoloadWillLoadDotEnvFile(): void
    {
        self::assertNotNull(getenv('DOTENV_FILE'));
    }

    public function testAutoloadWillLoadDotEnvDistFile(): void
    {
        self::assertNotNull(getenv('DOTENV_DIST_FILE'));
    }

    public function testAutoloadWillLoadDotEnvLocalFile(): void
    {
        self::assertNotNull(getenv('DOTENV_LOCAL_FILE'));
    }

    public function testAutoloadWillLoadDotEnvDevFile(): void
    {
        self::assertNotNull(getenv('DOTENV_PHPUNIT_FILE'));
    }

    public function testAutoloadWillLoadDotEnvDevLocalFile(): void
    {
        self::assertNotNull(getenv('DOTENV_PHPUNIT_LOCAL_FILE'));
    }
}
