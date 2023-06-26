<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Base\Service;

use Core\Traits\ServiceTrait;
use Core\Abstract\ServiceAbstract;

abstract class Service extends ServiceAbstract
{
    use ServiceTrait;
}
