<?php

declare(strict_types=1);

/*
 * This file is part of coisa/dotenv.
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 *
 * @link      https://github.com/coisa/dotenv
 * @copyright Copyright (c) 2021 Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

use Symfony\Component\Dotenv\Dotenv;

$autoloadFiles = [
    dirname(__DIR__).'/vendor/autoload.php',
    dirname(__DIR__, 3).'/autoload.php',
];

$dotenvFiles = [
    dirname(__DIR__).'/.env',
    dirname(__DIR__, 4).'/.env',
];

foreach ($autoloadFiles as $autoloadFile) {
    if (file_exists($autoloadFile)) {
        require_once $autoloadFile;

        break;
    }
}

$dotenv = new Dotenv();
$dotenv->usePutenv();

foreach ($dotenvFiles as $dotenvFile) {
    if (file_exists($dotenvFile)) {
        $dotenv->loadEnv($dotenvFile);
    }
}
