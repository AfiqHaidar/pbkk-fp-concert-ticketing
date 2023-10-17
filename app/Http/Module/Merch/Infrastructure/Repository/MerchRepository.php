<?php

namespace App\Http\Module\Merch\Infrastructure\Repository;

use App\Http\Module\Merch\Domain\Model\Merch;
use App\Http\Module\Merch\Domain\Services\Repository\MerchRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MerchRepository implements MerchRepositoryInterface
{
    public function save(Merch $merch)
    {
        DB::table('merchs')->upsert(
            [
                'nama' => $merch->nama,
                'price' => $merch->price,
                'description' => $merch->description,
            ],
            'nama'
        );
    }
}
