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

use CoiSA\Dotenv\Exception\NotFoundException;
use Psr\Container\ContainerInterface;

final class GetEnv implements ContainerInterface
{
    public function get($id)
    {
        if (!$this->has($id)) {
            throw new NotFoundException($id);
        }

        return getenv($id);
    }

    public function has($id): bool
    {
        return false !== getenv($id);
    }
}
