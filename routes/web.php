<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/list_barang', function () {
    return view('layout/list');
});