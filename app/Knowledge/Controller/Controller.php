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
namespace App\Knowledge\Controller;

use Core\Traits\ControllerTrait;
use Core\Abstract\ControllerAbstract;

abstract class Controller extends ControllerAbstract
{
    use ControllerTrait;
}
