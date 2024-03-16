<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ListProductController;

Route::get('/produk', function() {
    return view('list_product');
});

Route::get('/produk', [ListProductController::class, 'tampilkan']);