<?php

namespace App\Http\Module\Merch\Presentation\Controller;

use App\Http\Module\Merch\Application\Services\CreateMerch\CreateMerchRequest;
use App\Http\Module\Merch\Application\Services\CreateMerch\CreateMerchService;
use Illuminate\Http\Request;

class MerchController
{
    public function __construct(
        private CreateMerchService $create_merch_service
    ) {
    }

    public function createMerch(Request $request)
    {
        // dd($request);
        $request = new CreateMerchRequest(
            $request->input('nama'),
            $request->input('price'),
            $request->input('description'),
        );

        return $this->create_merch_service->execute($request);
    }
}
