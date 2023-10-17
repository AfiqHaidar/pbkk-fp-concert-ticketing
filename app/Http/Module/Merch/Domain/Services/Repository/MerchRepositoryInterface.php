<?php

namespace App\Http\Module\Merch\Domain\Services\Repository;

use App\Http\Module\Merch\Domain\Model\Merch;

interface MerchRepositoryInterface
{
    public function save(Merch $merch);
}
