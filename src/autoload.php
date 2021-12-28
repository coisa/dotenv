<?php

use Symfony\Component\Dotenv\Dotenv;

$autoloadFiles = [
    dirname(__DIR__) . '/vendor/autoload.php',
    dirname(__DIR__, 3) . '/autoload.php',
];

$dotenvFiles = [
    dirname(__DIR__) . '/.env',
    dirname(__DIR__, 4) . '/.env',
];

foreach ($autoloadFiles as $autoloadFile) {
    if (file_exists($autoloadFile)) {
        require_once $autoloadFile;
        break;
    }
}

$dotenv = new Dotenv();

foreach ($dotenvFiles as $dotenvFile) {
    if (file_exists($dotenvFile)) {
        $dotenv->loadEnv($dotenvFile);
    }
}