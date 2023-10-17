<?php

use Illuminate\Support\Facades\Route;

Route::get('ping', function () {
    return csrf_token();
});

Route::post('create_merch', [\App\Http\Module\Merch\Presentation\Controller\MerchController::class, 'createMerch']);
