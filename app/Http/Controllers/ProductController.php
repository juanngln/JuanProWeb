<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getData () {
        $dataProduk = [
            ['id' => 1, 'produk' => 'Paddle Pop Rainbow', 'harga' => '5000'],
            ['id' => 2, 'produk' => 'Sari Roti Sandwich', 'harga' => '6000'],
            ['id' => 3, 'produk' => 'Garuda Rosta', 'harga' => '10000'],
            ['id' => 4, 'produk' => 'Fruit Tea', 'harga' => '3500'],
            ['id' => 5, 'produk' => 'Golda', 'harga' => '3000'],
            ['id' => 6, 'produk' => 'Red Bull', 'harga' => '8000']
        ];

        return $dataProduk;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('product', compact('data'));
    }
}