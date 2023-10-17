<?php

namespace App\Http\Module\Merch\Application\Services\CreateMerch;

use App\Http\Module\Merch\Domain\Model\Merch;
use App\Http\Module\Merch\Infrastructure\Repository\MerchRepository;

class CreateMerchService
{

    public function __construct(
        private MerchRepository $merch_repository
    ) {
    }

    public function execute(CreateMerchRequest $request)
    {
        $merch = new Merch(
            $request->nama,
            $request->price,
            $request->description,
        );

        $this->merch_repository->save($merch);
    }
}
