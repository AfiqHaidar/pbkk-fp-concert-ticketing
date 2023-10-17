<?php

namespace App\Http\Module\Merch\Application\Services\CreateMerch;

class CreateMerchRequest
{
    public function __construct(
        public string $nama,
        public float $price,
        public string $description,
    ) {
    }
}
