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

$header = <<<'EOF'
This file is part of coisa/dotenv.

This source file is subject to the license that is bundled
with this source code in the file LICENSE.

@link      https://github.com/coisa/dotenv
@copyright Copyright (c) 2021 Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
@license   https://opensource.org/licenses/MIT MIT License
EOF;

$finder = PhpCsFixer\Finder::create()
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true)
    ->name('*.php')
    ->notPath('vendor/')
    ->in(__DIR__)
    ->append([__FILE__])
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP81Migration' => true,
        '@PHP80Migration:risky' => true,
        '@PHP71Migration' => true,
        '@PHP71Migration:risky' => true,
        '@PHPUnit75Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'general_phpdoc_annotation_remove' => ['annotations' => ['expectedDeprecation']],
        'header_comment' => compact('header'),
        'modernize_strpos' => true,
        'heredoc_indentation' => false,
    ])
    ->setFinder($finder)
;

return $config;
