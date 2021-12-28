<?php

namespace CoiSA\Dotenv;

use PHPUnit\Framework\TestCase;

final class AutoloadTest extends TestCase
{
    public function testAutoloadWillLoadDotEnvFile()
    {
        $this->assertNotNull(getenv('DOTENV_FILE'));
    }

    public function testAutoloadWillLoadDotEnvDistFile()
    {
        $this->assertNotNull(getenv('DOTENV_DIST_FILE'));
    }

    public function testAutoloadWillLoadDotEnvLocalFile()
    {
        $this->assertNotNull(getenv('DOTENV_LOCAL_FILE'));
    }

    public function testAutoloadWillLoadDotEnvDevFile()
    {
        $this->assertNotNull(getenv('DOTENV_PHPUNIT_FILE'));
    }

    public function testAutoloadWillLoadDotEnvDevLocalFile()
    {
        $this->assertNotNull(getenv('DOTENV_PHPUNIT_LOCAL_FILE'));
    }
}
