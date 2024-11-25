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

use CoiSA\PhpCsFixer\PhpCsFixer;

$paths = [
    __FILE__,
    __DIR__,
];

$header = <<<'EOF'
This file is part of coisa/dotenv.

This source file is subject to the license that is bundled
with this source code in the file LICENSE.

@link      https://github.com/coisa/dotenv
@copyright Copyright (c) 2021-2024 Felipe Sayão Lobato Abreu <github@felipeabreu.com.br>
@license   https://opensource.org/licenses/MIT MIT License
EOF;

return PhpCsFixer::create($paths, $header);
