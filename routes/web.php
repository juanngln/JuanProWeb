<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ListProductController;

Route::get("/", function(){
    return view('welcome');
});

Route::get("/product", [ListProductController::class, 'tampilkan']);
Route::get('/listproduk', [ProdukController::class, 'show']);