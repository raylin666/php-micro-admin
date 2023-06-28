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
namespace App\Admin\Service;

use App\Admin\Logic\AccountLogic;
use Core\Constants\ErrorCode;
use Hyperf\Di\Annotation\Inject;

class AccountService extends Service
{
    #[Inject]
    public AccountLogic $accountLogic;

    /**
     * 获取账号信息.
     * @return array
     */
    public function info(): array
    {
        $account = $this->getContextAccount();
        if (empty($account)) {
            error(ErrorCode::ACCOUNT_INVALID_IDENTITY_ERROR);
        }

        return $this->accountLogic->info($account);
    }
}