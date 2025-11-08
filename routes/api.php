<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::post('auth/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('auth/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('products', App\Http\Controllers\Api\ProductController::class);
        Route::apiResource('purchase-orders', App\Http\Controllers\Api\PurchaseOrderController::class);
        Route::post('shipments/{id}/tracking-push', [App\Http\Controllers\Api\ShipmentController::class, 'trackingPush']);
        Route::post('shipments/{id}/track', [App\Http\Controllers\Api\ShipmentController::class, 'triggerTrack']);
        Route::apiResource('reimbursements', App\Http\Controllers\Api\ReimbursementController::class);
    });
});
